#### Module : configuration

Sensitive information and environment-dependent settings should be defined as environment variables (as recommended for [twelve-factor applications](https://www.12factor.net/config)).

This module makes it possible to store environment-dependent settings in configuration profiles. Configuration is the applied at build time by preprocessing so-called "dist files".

Dist files are files suffixed with the `configuration.suffix` value where environment-dependent values are replaced by tokens.

##### Installation

The `configuration` module is always enabled.

##### Usage

Create a dist file :
```
# src/app/config/parameters.yml-dist
database:
    host: @database.host@
    port: @database.port@
```

Create a configuration profile by scanning application's dist files :
```
$ ./vendor/bin/anananas configuration.update -Dconfiguration.profile=production

# etc/profiles/production/profile.properties
database.host=
database.port=
```

Define configuration values :
```
# etc/profiles/production/profile.properties
database.host=mysql_master
database.port=3306
```

Apply configuration profile :
```
$ ./vendor/bin/anananas configuration.apply -Dconfiguration.profile=production

# src/app/config/parameters.yml
database:
    host: mysql_master
    port: 3306
```

##### Attributes

* **configuration.dir.profiles** (default : `${application.dir.base}/etc/profiles/etc/profiles`) : Directory holding configuration profiles.
* **configuration.dotenv.outputfile** (default: `${configuration.dir.profiles}/${configuration.profile}/configuration.env` : Destination file path when exporting configuration profile to dotenv format
* **configuration.suffix** (default : `-dist`) : files suffixed with this values are considered dist files
* **configuration.token** (default : `@`) : char surrounding configuration tokens in dist files

##### Targets

* **configuration.apply** : Replaces tokens in application dist files with values from the selected configuration profile
* **configuration.dotenv** : Exports selected configuration profile to environment variables stored in a file that can be sourced by any shell. Properties are converted using the following rules :
    * Dots in property names are replace by underscores
    * Property names are capitalized
    * Property values are surrounded by double quotes

    Example : `application.name=myapp` becomes `APPLICATION_NAME="myapp"`
* **configuration.update** : Scans applications dist files for tokens and adds missing ones to the selected configuration profile
