#### Module : composer

Ce module permet d'interagir avec Composer, le gestionnaire de dépendances PHP (http://getcomposer.org).

**Attention :** ce module ne fournit pas Composer en lui-même, il revient à l'utilisateur de l'installer.

##### Installation

Ajoutez les lignes suivantes à votre fichier ```build.xml```, aux endroits indiqués :

Après l'import du module toolkit :
 ```xml
 <import file="${toolkit.basedir}/modules/composer/module.xml" />
 ```

Dans la *target* ```setprofile``` :
```xml
<property file="${toolkit.basedir}/modules/composer/build.properties" />
```

##### Directives de configuration

* **composer.executable** (défaut : src/composer.phar) : chemin vers le fichier composer.phar

##### Tâches

* **composer.update** : (toolkit phase : *build*) : Lance la mise à jour des dépendances. cf. http://getcomposer.org/doc/01-basic-usage.md#installing-dependencies

