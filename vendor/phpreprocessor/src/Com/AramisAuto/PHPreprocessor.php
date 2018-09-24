<?php
namespace Com\AramisAuto;

class PHPreprocessor
{
    /**
     * @var SplFileObject
     */
    private $log;

    public function __construct(\SplFileObject $logfile)
    {
        $this->log = $logfile;
    }

    /**
     * Extracts tokens from files in source directory and outputs corresponding stub properties file to stdout.
     */
    public function extract(array $options)
    {
        // TODO : options sanity checks

        // Find dist files
        $files = $this->findDistFiles($options['src']);

        // Extract tokens
        $tokens = $this->_extractTokensFromFiles($files);

        // Exclude tokens
        if (isset($options['exclude-from'])) {
            $files = explode(',', $options['exclude-from']);
            foreach ($files as $file) {
                // Sanity checks
                if (!is_readable($file)) {
                    throw new \InvalidArgumentException(sprintf('File "%s" can not be read', $file));
                }
                // Remove excluded tokens from list
                // TODO : this should use array_diff_assoc()
                $errorReporting = error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
                $tokensExcluded = parse_ini_file($file, false, INI_SCANNER_RAW);
                error_reporting($errorReporting);
                $tokens = array_merge($tokensExcluded, $tokens);
                foreach ($tokensExcluded as $tokenName => $tokenValue) {
                    if (!empty($tokensExcluded[$tokenName])) {
                        $tokens[$tokenName] = array('value' => $tokenValue, 'inherited' => true);
                    } else {
                        if (empty($tokensExcluded[$tokenName]) && empty($tokens[$tokenName])) {
                            $tokens[$tokenName] = array('value' => $tokenValue, 'inherited' => true);
                        }
                    }
                }
            }
        }

        // Compute merge properties
        if (isset($options['merge-with'])) {
            if (!is_readable($options['merge-with'])) {
                throw new \InvalidArgumentException(sprintf('File %s is not readable', $options['merge-with']));
            }
            $errorReporting = error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
            $mergeWith = parse_ini_file($options['merge-with'], false, INI_SCANNER_RAW);
            error_reporting($errorReporting);
            $tokens = array_merge($tokens, $mergeWith);
        }

        // Sort tokens
        ksort($tokens);

        // Output results
        $file = new \SplFileObject('php://stdout', 'w');
        $file->fwrite($this->_generateProperties($tokens));
    }

    public function apply(array $options)
    {
        // TODO : options sanity checks

        // Find dist files
        $files = $this->findDistFiles($options['src']);

        // Unserialize tokens
        $tokensFiles = explode(',', $options['properties']);
        $tokens = array();
        foreach ($tokensFiles as $tokenFile) {
            if (!is_readable($tokenFile)) {
                throw new \RuntimeException(sprintf('File "%s" is not readable', $tokenFile));
            }
            $errorReporting = error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
            $tokens = array_merge($tokens, parse_ini_file($tokenFile, false, INI_SCANNER_RAW));
            error_reporting($errorReporting);
        }
        // It has to be done afterwards otherwise you might end up with something else than a timestamp
        $tokens = array_merge($tokens, array('phpreprocessor.apply.timestamp' => time()));

        // Create non -dist files
        $copied_files = array();
        foreach ($files as $file) {
            $new_file = substr($file, 0, strlen($file) - strlen('-dist'));
            copy($file, $new_file); // TODO : sanity checks
            $copied_files[] = $new_file;
        }

        // Perform replacements
        $this->replaceTokens($copied_files, '@', '@', $tokens, $options['reverse']);
    }

    /**
     * Finds *-dist files in given directory.
     *
     * @param string $srcDir Path to sources root directory
     *
     * @return array An array of paths to found -dist files
     */
    private function findDistFiles($srcDir)
    {
        $distFiles = array();
        $iterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($srcDir, \RecursiveDirectoryIterator::FOLLOW_SYMLINKS));
        foreach ($iterator as $path => $fileInfo) {
            if ($fileInfo->isFile()) {
                if (preg_match('/.*-dist$/', $fileInfo->getFilename())) {
                    $distFiles[] = $path;
                }
            }
        }

        $this->logMessage('Found %d -dist files in directory "%s"', array(count($distFiles), $srcDir));

        return $distFiles;
    }

    /**
     * Extracts, deduplicates and sorts tokens.
     *
     * @param array $files
     *
     * @return array $tokens
     */
    private function _extractTokensFromFiles(array $files)
    {
        // Extract tokens from files
        $tokens = array();
        foreach ($files as $path) {
            $matches = array();
            preg_match_all('/@[a-z0-9\._]+?@/i', file_get_contents($path), $matches);
            if (count($matches[0])) {
                foreach ($matches[0] as $token) {
                    if (!isset($tokens[$token])) {
                        $tokens[$token] = null;
                    }
                }
            }
        }

        // Cleanup
        foreach ($tokens as $token => $files) {
            $tokens[trim($token, '@')] = null;
            unset($tokens[$token]);
        }
        ksort($tokens);

        return $tokens;
    }

    private function _generateProperties(array $tokens)
    {
        // Generate properties file text
        $lines = array();

        // File header
        $lines[] = sprintf('; This file has been automatically generated by %s', __CLASS__);
        $lines[] = ';';
        $lines[] = '; It holds all available configuration directives for the project.';
        $lines[] = '; Commented out directives have been inherited from parent configuration files.';
        $lines[] = '; Uncomment directives to affect a specific value for this configuration profile.';

        $namespaceCurrent = '';
        foreach ($tokens as $token => $value) {
            $parts = explode('.', $token);
            $namespace = $parts[0];
            if ($namespace != $namespaceCurrent) {
                $namespaceCurrent = $namespace;
                $lines[] = '';
                $lines[] = '; '.$namespaceCurrent;
            }

            if (!is_array($value)) {
                $lines[] = sprintf('%s=%s', $token, $value);
            } else {
                if ($value['inherited']) {
                    $lines[] = sprintf(';%s=%s', $token, $value['value']);
                } else {
                    $lines[] = sprintf('%s=%s', $token, $value['value']);
                }
            }
        }
        $lines[] = '';

        return implode("\n", $lines);
    }

    /**
     * Replaces tokens in an array of files.
     *
     * @param array  $files      An array of filenames
     * @param string $beginToken The begin token delimiter
     * @param string $endToken   The end token delimiter
     * @param array  $tokens     An array of token/value pairs
     * @param bool   $reverse
     *
     * @return null
     */
    private function replaceTokens($files, $beginToken, $endToken, $tokens, $reverse = false)
    {
        if (!is_array($files)) {
            $files = array($files);
        }

        foreach ($files as $file) {
            $content = file_get_contents($file);
            foreach ($tokens as $key => $value) {
                if ($reverse === false) {
                    $content = str_replace($beginToken.$key.$endToken, $value, $content);
                } else {
                    if (filter_var($key, FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => $reverse)))) {
                        $content = str_replace($value, $beginToken.$key.$endToken, $content);
                    }
                }
            }
            file_put_contents($file, $content);
        }

        $feedbackReverse = '';
        if ($reverse) {
            $feedbackReverse = ' in reverse mode';
        }
        $this->logMessage('Replaced %d tokens in %d files%s', array(count($tokens), count($files), $feedbackReverse));
    }

    private function logMessage($messagePattern, array $values = array())
    {
        $messagePattern = sprintf('[%s] %s', date('r'), $messagePattern);
        array_unshift($values, $messagePattern);
        $message = call_user_func_array('sprintf', $values);
        $this->log->fwrite($message."\n");
    }
}
