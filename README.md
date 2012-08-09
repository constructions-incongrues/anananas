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

## Utilisation

Placez-vous à la racine du projet et exécutez les commandes suivantes :

```bash
curl -s http://getcomposer.org/installer | php
mkdir -p vendor/constructions-incongrues
php composer.phar create-project --repository-url=http://constructions-incongrues.github.com/packages/ constructions-incongrues/ananas-build-toolkit vendor/constructions-incongrues/ananas-build-toolkit
ant -f vendor/constructions-incongrues/ananas-build-toolkit/modules/toolkit/module.xml toolkit.init -Dbasedir=$PWD
```


