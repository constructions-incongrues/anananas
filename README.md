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

Le toolkit s'installe à l'aide de [Composer](http://getcomposer.org). 

Placez-vous à la racine du projet et créez un fichier ```composer.json``` avec le contenu suivant :

```json
{
    "repositories": [
        {
            "type": "composer",
            "url": "http://constructions-incongrues.github.com/packages"
        }
    ],
    "require": {
        "constructions-incongrues/ananas-build-toolkit": "dev-master"
    }
}
```

Installez Composer : 

```bash
curl -s http://getcomposer.org/installer | php
```

Récupérez le toolkit : 

```bash
php composer.phar update
```

Initialisez le toolkit : 

```bash
ant -f vendor/constructions-incongrues/ananas-build-toolkit/modules/toolkit/module.xml toolkit.init -Dbasedir=$PWD
```
