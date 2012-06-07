# Ananas Build Toolkit

## Présentation du projet

## Présentation du cycle de travail proposé par le toolkit

## Fonctionnement de la configuration en cascade

## Utilisation

### Installation et initialisation au sein d'un projet

À la racine du projet :

```bash
git submodule add git@github.com:contructions-incongrues/ananas-build-toolkit.git vendor/ananas-build-toolkit
cd vendor/ananas-build-toolkit
git submodule update --init --recursive
cd -
ant -f vendor/ananas-build-toolkit/modules/toolkit/module.xml -Dbasedir=. -Dprofile=$USER toolkit.init
```

Cette opération télécharge les sources du toolkit et crée un profil de configuration à votre nom dans le répertoire etc/.

### Activation d'un module

Il suffit d'importer le projet ant du module dans le fichier ```build.xml``` du projet. L'opération est décrite précisément dans la documentation de chacun des modules.

### Documentation des modules

Les modules contiennent leur propre documentation :

* [composer](https://github.com/contructions-incongrues/ananas-build-toolkit/tree/master/modules/composer)
* [development](https://github.com/contructions-incongrues/ananas-build-toolkit/tree/master/modules/development)
* [filesystem](https://github.com/contructions-incongrues/ananas-build-toolkit/tree/master/modules/filesystem)
* [liquibase](https://github.com/contructions-incongrues/ananas-build-toolkit/tree/master/modules/liquibase)
* [properties](https://github.com/contructions-incongrues/ananas-build-toolkit/tree/master/modules/properties)
* [review](https://github.com/contructions-incongrues/ananas-build-toolkit/tree/master/modules/review)
* [rsync](https://github.com/contructions-incongrues/ananas-build-toolkit/tree/master/modules/rsync)
* [symfony1](https://github.com/contructions-incongrues/ananas-build-toolkit/tree/master/modules/symfony1)
* [toolkit](https://github.com/contructions-incongrues/ananas-build-toolkit/tree/master/modules/toolkit)

### Création d'un nouveau module

## TODO

* [] [agnocism] third party module related helpers should not be bundled by default
* [] [doc] write project presentation
* [] [doc] document each module : usage, directives
* [] [doc] create a logo for the projet
* [] [filesystem] make all targets more verbose
* [] [filesystem] implement chown task
* [] [filesystem] fix bug with multiple chmod modes
* [] [modules] add "php" module for handling PHP runtime configuration
* [] [review] rename "review" target to "review.php"
* [] [review] also include uncommited files to review
* [] [review] add phpcs.additional_options directive (with -n activated by default)
* [] [sync] rename remote.host directive to remote.hostname
* [] [sync] rename remote.* to sync.*
* [] [sync] enable multiple sync destinations
* [x] [agnocism] implement "module" concept
* [x] [agnocism] language related modules should not be enabled by default
* [x] [configure] move filesystem related tasks to filesystem module
* [x] [development] task for generating module skeleton
* [x] [init] make it possible to specify project name at runtime
* [x] [init] review init targets
* [x] [properties] move preprocessing targets to dedicated module. properties.update, properties.apply
* [x] [symfony] rename symfony module to symfony1
* [x] [toolkit] toolkit should me a module too, exposing default configuration (and init tasks ?)
* [x] [toolkit] move init targets to toolkit module
