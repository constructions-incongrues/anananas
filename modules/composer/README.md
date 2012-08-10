# Module : composer

Ce module permet d'interagir avec [Composer](http://getcomposer.org), un gestionnaire de dépendances PHP.

**Attention :** ce module ne fournit pas Composer en lui-même, il revient à l'utilisateur de l'installer.

## Directives de configuration

* **composer.executable** (défaut : *src/composer.phar*) : chemin vers le fichier composer.phar

Si besoin, surchargez les directives de configuration par défaut du module dans votre profil de configuration.

## Tâches du module

### update

#### composer-install

Lance la mise à jour des dépendances (```composer.phar install```). cf. http://getcomposer.org/doc/01-basic-usage.md#installing-dependencies

