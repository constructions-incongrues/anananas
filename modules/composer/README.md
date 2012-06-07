#### Module : composer

Ce module permet d'interagir avec [Composer](http://getcomposer.org), un gestionnaire de dépendances PHP.

**Attention :** ce module ne fournit pas Composer en lui-même, il revient à l'utilisateur de l'installer.

##### Installation

Ajoutez les lignes suivantes au fichier ```build.xml``` du projet, aux endroits indiqués :

Après l'import du module toolkit :
 ```xml
 <import file="${toolkit.basedir}/modules/composer/module.xml" />
 ```

Dans la *target* ```setprofile``` :
```xml
<property file="${toolkit.basedir}/modules/composer/build.properties" />
```

Si besoin, surchargez les directives de configuration par défaut du module dans votre profil de configuration.

##### Directives de configuration

* **composer.executable** (défaut : *src/composer.phar*) : chemin vers le fichier composer.phar

##### Les tâches et leurs paramètres

* **composer.update** : (toolkit phase : *build*) : Lance la mise à jour des dépendances. cf. http://getcomposer.org/doc/01-basic-usage.md#installing-dependencies

