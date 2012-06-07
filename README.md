# Ananas Build Toolkit

## Présentation du projet

L'Ananas Build Toolkit est un framework de configuration et de déploiement de projet logiciel.

Ces principaux intérêts sont :

 * Installation aidée
 * Indifférent au(x) langage(s) de programmation utilisé(s) au sein du projet
 * Cycle de travail simple et rapide à prendre en main
 * Gestion efficace de profils de configuration multiples
 * Modulaire et extensible
 * Libre et gratuit

Il est basé sur [Ant](http://ant.apache.org) et [PHPreprocessor](https://github.com/constructions-incongrues/phpreprocessor).

## Présentation du cycle de travail proposé par le toolkit

Le toolkit segmente l'exploitation d'un projet en cinq phases.

 ### Configuration

Les caractéristiques du système de configuration offert par le toolkit sont les suivantes :

 * une séparation stricte du code source et de la configuration du projet
 * un mécanisme d'application de la configuration complètement indifférent aux solutions techniques utilisées par le projet (langage, framework, etc)

La phase de configuration sert donc à appliquer un profil de configuration au projet dans l'attente de le déployer vers l'environnement d'exploitation correspondant.

Cette phase de configuration est déclenchée par la commande suivante :

```bash
ant configure -Dprofile=NOM_DU_PROFIL
```

 ### Construction
 
 ### Analyse

 ### Migration
 
 ### Synchronisation

## Fonctionnement de la configuration en cascade

## Utilisation

### Installation et initialisation au sein d'un projet

À la racine du projet :

```bash
# Récupération des sources du toolkit
git submodule add git@github.com:constructions-incongrues/ananas-build-toolkit.git vendor/ananas-build-toolkit

# Récupération des sous-modules du toolkit
cd vendor/ananas-build-toolkit
git submodule update --init --recursive

# Initialisation du projet : création du fichier de build et des profils de configuration
cd -
ant -f vendor/ananas-build-toolkit/modules/toolkit/module.xml -Dbasedir=. toolkit.init
```

Cette opération télécharge les sources du toolkit et crée un profil de configuration à votre nom dans le répertoire etc/.

### Installation et utilisation des modules

Il suffit d'importer le projet ant du module dans le fichier ```build.xml``` du projet. L'opération est décrite précisément dans la documentation de chacun des modules :

* [composer](https://github.com/constructions-incongrues/ananas-build-toolkit/tree/master/modules/composer)
* [development](https://github.com/constructions-incongrues/ananas-build-toolkit/tree/master/modules/development)
* [filesystem](https://github.com/constructions-incongrues/ananas-build-toolkit/tree/master/modules/filesystem)
* [liquibase](https://github.com/constructions-incongrues/ananas-build-toolkit/tree/master/modules/liquibase)
* [php](https://github.com/constructions-incongrues/ananas-build-toolkit/tree/master/modules/php)
* [properties](https://github.com/constructions-incongrues/ananas-build-toolkit/tree/master/modules/properties)
* [review](https://github.com/constructions-incongrues/ananas-build-toolkit/tree/master/modules/review)
* [rsync](https://github.com/constructions-incongrues/ananas-build-toolkit/tree/master/modules/rsync)
* [symfony1](https://github.com/constructions-incongrues/ananas-build-toolkit/tree/master/modules/symfony1)
* [toolkit](https://github.com/constructions-incongrues/ananas-build-toolkit/tree/master/modules/toolkit)

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
* [] [properties] also show non-valued properties in local configuration profile
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
* [x] [toolkit] toolkit.init fails on ${php.executable} not found
