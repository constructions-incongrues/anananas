# Ananas Build Toolkit

## Présentation du projet

L'Ananas Build Toolkit est un framework de configuration et de déploiement de projet informatique.

Ces principaux intérêts sont :

 * Installation aidée
 * Agnosticité au(x) langage(s) de programmation utilisés au sein du projet
 * Cycle de travail simple et rapide à prendre en main
 * Gestion efficace de profils de configuration multiples
 * Libre et gratuit
 * Modulaire et extensible

Il est basé sur [Ant](http://ant.apache.org) et [PHPreprocessor](https://github.com/ARAMISAUTO/phpreprocessor).

## Présentation du cycle de travail proposé par le toolkit

Le toolkit identifie cinq grandes phases dans l'exploitation d'un projet informatique :

 * Configuration
 * Construction
 * Analyse
 * Migration
 * Synchronisation

## Fonctionnement de la configuration en cascade

## Utilisation

### Installation et initialisation au sein d'un projet

À la racine du projet :

```bash
# Récupération des sources du toolkit
git submodule add git@github.com:contructions-incongrues/ananas-build-toolkit.git vendor/ananas-build-toolkit

# Récupération des sous-modules du toolkit
cd vendor/ananas-build-toolkit
git submodule update --init --recursive
cd -

# Initialisation du projet : création du fichier de build et des profils de configuration
ant -f vendor/ananas-build-toolkit/modules/toolkit/module.xml -Dbasedir=. toolkit.init
```

Cette opération télécharge les sources du toolkit et crée un profil de configuration à votre nom dans le répertoire etc/.

### Installation et utilisation des modules

Il suffit d'importer le projet ant du module dans le fichier ```build.xml``` du projet. L'opération est décrite précisément dans la documentation de chacun des modules :

* [composer](https://github.com/contructions-incongrues/ananas-build-toolkit/tree/master/modules/composer)
* [development](https://github.com/contructions-incongrues/ananas-build-toolkit/tree/master/modules/development)
* [filesystem](https://github.com/contructions-incongrues/ananas-build-toolkit/tree/master/modules/filesystem)
* [liquibase](https://github.com/contructions-incongrues/ananas-build-toolkit/tree/master/modules/liquibase)
* [php](https://github.com/contructions-incongrues/ananas-build-toolkit/tree/master/modules/php)
* [properties](https://github.com/contructions-incongrues/ananas-build-toolkit/tree/master/modules/properties)
* [review](https://github.com/contructions-incongrues/ananas-build-toolkit/tree/master/modules/review)
* [rsync](https://github.com/contructions-incongrues/ananas-build-toolkit/tree/master/modules/rsync)
* [symfony1](https://github.com/contructions-incongrues/ananas-build-toolkit/tree/master/modules/symfony1)
* [toolkit](https://github.com/contructions-incongrues/ananas-build-toolkit/tree/master/modules/toolkit)

### Création d'un nouveau module

## TODO

* [] [agnocism] third party module related helpers should not be bundled by default (better bootstrap.module them)
* [] [development] find an easier way to activate modules
* [] [doc] write project presentation
* [] [doc] document each module : usage, directives
* [] [doc] create a logo for the projet
* [] [filesystem] make all targets more verbose
* [] [filesystem] implement chown task
* [] [filesystem] fix bug with multiple chmod modes
* [] [properties] task for designating deprecated properties
* [] [review] rename "review" target to "php.review"
* [] [review] rename bootstrap.review to review.bootstrap
* [] [review] also include uncommited files to review
* [] [review] add phpcs.additional_options directive (with -n activated by default)
* [] [sync] rename remote.host directive to remote.hostname
* [] [sync] rename remote.* to sync.*
* [] [sync] enable multiple sync destinations

## DONE

* [x] [agnocism] implement "module" concept
* [x] [agnocism] language related modules should not be enabled by default
* [x] [configure] move filesystem related tasks to filesystem module
* [x] [development] task for generating module skeleton
* [x] [init] make it possible to specify project name at runtime
* [x] [init] review init targets
* [x] [modules] add "php" module for handling PHP runtime configuration
* [x] [php] php executable path must be configurable
* [x] [properties] move preprocessing targets to dedicated module. properties.update, properties.apply
* [x] [symfony] rename symfony module to symfony1
* [x] [toolkit] toolkit should me a module too, exposing default configuration (and init tasks ?)
* [x] [toolkit] move init targets to toolkit module
