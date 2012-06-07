# Ananas Build Toolkit

## Présentation du projet

### Documentation pour les utilisateurs

#### Initialisation

```bash
git submodule add git@github.com:contructions-incongrues/ananas-build-toolkit.git vendor/ananas-build-toolkit
cd vendor/ananas-build-toolkit
git submodule update --init --recursive
cd -
ant -f vendor/ananas-build-toolkit/modules/toolkit/module.xml -Dbasedir=. -Dprofile=$USER toolkit.init
```

#### Présentation du cycle de travail proposé par le toolkit

#### Fonctionnement de la configuration en cascade

#### Modules disponibles

##### rsync
Ce module fournit une interface avec Rsync pour synchroniser les sources d'un projet avec des serveurs distants.

Activé par défaut : oui
Tâches : 
Directives de configuration : 

#### Création d'un module tiers

## TODO

* [] [agnocism] third party module related helpers should not be bundled by default
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
* [] [sync] enable multiple remotes
* [] [sync] rename remote.* to sync.*
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
