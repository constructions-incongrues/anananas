# Ananas Build Toolkit

## Présentation du projet

### Documentation pour les utilisateurs

#### Initialisation

```bash
git submodule add git@github.com:contructions-incongrues/ananas-build-toolkit.git vendor/ananas-build-toolkit
cd vendor/ananas-build-toolkit
git submodule update --init --recursive
cd -
ant -f vendor/ananas-build-toolkit/modules/toolkit/module.xml -Dbasedir=. -Dprofile=$USER init
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

* [x] [agnocism] implement "module" concept
* [x] [agnocism] language related modules should not be enabled by default
* [x] [symfony] rename symfony module to symfony1
* [x] [toolkit] toolkit should me a module too, exposing default configuration (and init tasks ?)
* [] [agnocism] third party module related helpers should not be bundled by default
* [] [toolkit] move init targets to toolkit module
* [] [review] rename "review" target to "review.php"
* [] [doc] document each module : usage, directives
* [] [review] add phpcs.additional_options directive (with -n activated by default)
* [] [properties] move preprocessing targets to dedicated module. properties.update, properties.apply
* [] [init] review init targets
* [] [sync] rename remote.host directive to remote.hostname
* [] [init] make it possible to specify project name at runtime
* [] [review] also include uncommited files to review
* [] [sync] enable multiple remotes
* [] [sync] rename remote.* to sync.*
* [] [modules] add "php" module for handling PHP runtime configuration
* [] [doc] create a logo for the projet