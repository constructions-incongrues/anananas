# Ananas Build Toolkit

## Présentation du projet

L'Ananas Build Toolkit est un framework de configuration et de déploiement de projet logiciel.

Ces principaux intérêts sont :

 * Installation aisée
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

La phase de construction permet de :

 * récupérer et installer les dépendances du projet
 * générer tout le code qui doit l'être automatiquement (classes d'ORM, etc)

L'Ananas Build Toolkit met à disposition des modules spécialisés :

 * [composer](https://github.com/constructions-incongrues/ananas-build-toolkit/tree/master/modules/composer), qui permet de gérer les dépendances d'un projet à l'aide [Composer](http://getcomposer.org)
 * [symfony1](https://github.com/constructions-incongrues/ananas-build-toolkit/tree/master/modules/symfony1), qui permet de générer les différents artefacts requis par un projet symfony (des version 1.2 à 1.4)

Elle est déclenchée par la commande suivante :

```bash
ant build -Dprofile=NOM_DU_PROFIL
```
 
### Analyse



### Migration
 
### Synchronisation

## Fonctionnement de la configuration en cascade

## Utilisation

### Installation et initialisation d'un projet vide

### Installation et initialisation au sein d'un projet existant

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
* [filesystem](https://github.com/constructions-incongrues/ananas-build-toolkit/tree/master/modules/filesystem)
* [liquibase](https://github.com/constructions-incongrues/ananas-build-toolkit/tree/master/modules/liquibase)
* [php](https://github.com/constructions-incongrues/ananas-build-toolkit/tree/master/modules/php)
* [properties](https://github.com/constructions-incongrues/ananas-build-toolkit/tree/master/modules/properties)
* [rsync](https://github.com/constructions-incongrues/ananas-build-toolkit/tree/master/modules/rsync)
* [symfony1](https://github.com/constructions-incongrues/ananas-build-toolkit/tree/master/modules/symfony1)
* [toolkit](https://github.com/constructions-incongrues/ananas-build-toolkit/tree/master/modules/toolkit)
* [toolkit-sdk](https://github.com/constructions-incongrues/ananas-build-toolkit/tree/master/modules/toolkit-sdk)

### Création d'un nouveau module

## TODO

* [] [agnostism] third party module related helpers should not be bundled by default (better bootstrap.module them)
* [] [toolkit-sdk] find an easier way to activate modules
* [] [doc] write project presentation
* [] [doc] document each module : usage, directives
* [] [doc] create a logo for the projet
* [] [filesystem] make all targets more verbose
* [] [filesystem] implement chown task
* [] [filesystem] fix bug with multiple chmod modes
* [] [properties] task for designating deprecated properties
* [] [properties] also show non-valued properties in local configuration profile
* [] [review] also include uncommited files to review
* [] [sync] rename remote.host directive to remote.hostname
* [] [sync] rename remote.* to sync.*
* [] [sync] enable multiple sync destinations

## DONE

* [x] [agnostism] implement "module" concept
* [x] [agnostism] language related modules should not be enabled by default
* [x] [configure] move filesystem related tasks to filesystem module
* [x] [development] task for generating module skeleton
* [x] [development] rename "development" module to "toolkit-sdk"
* [x] [init] make it possible to specify project name at runtime
* [x] [init] review init targets
* [x] [modules] add "php" module for handling PHP runtime configuration
* [x] [php] php executable path must be configurable
* [x] [properties] move preprocessing targets to dedicated module. properties.update, properties.apply
* [x] [review] move review code to php module
* [x] [review] rename bootstrap.review to review.bootstrap
* [x] [review] add phpcs.additional_options directive (with -n activated by default)
* [x] [symfony] rename symfony module to symfony1
* [x] [toolkit] toolkit should me a module too, exposing default configuration (and init tasks ?)
* [x] [toolkit] move init targets to toolkit module
* [x] [toolkit] toolkit.init fails on ${php.executable} not found
