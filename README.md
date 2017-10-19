# Anananas

Anananas makes it easy to configure, build and deploy applications to multiple environments

## Getting started

### Installation

At the root of your project sources :

```sh
composer require constructions-incongrues/ananas-build-toolkit "2.0.0-alpha.2"
ant -f vendor/constructions-incongrues/ananas-build-toolkit/modules/toolkit/bootstrap.xml -Dbasedir=$PWD
```

Add `anananas` executable to the PATH : `export PATH=$PATH:$PWD/vendor/bin`

### Examples

#### Symfony 4

https://medium.com/@fabpot/symfony-4-a-quick-demo-da7d32be323

```sh
mkdir demo-project
cd demo-project
# Install Ananas Build Toolkit
# cf. doc

# Create new Symfony project
composer create-project "symfony/skeleton:^3.3" src/symfony

# Rename src/symfony/
```

## Concepts

### Stages

#### configure

#### deploy

#### init

#### install

#### build

#### package

#### upload

### Modules

