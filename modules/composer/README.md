##### Module : composer

Présentation du module.

* Activé par défaut : **non**

###### Installation

Ajoutez les lignes suivantes à votre fichier ```build.xml```, aux endroits indiqués :

Après l'import du module toolkit :
 ```xml
 <import file="${toolkit.basedir}/modules/composer/module.xml" />
 ```

Dans la *target* ```setprofile``` :
```xml
<property file="${toolkit.basedir}/modules/composer/build.properties" />
```

###### Directives de configuration

* composer.directive.1 (valeur par défaut : val) : description
* composer.directive.2 (valeur par défaut : val) : description

###### Tâches

* composer.task.1 : (toolkit phase : phase) : description
* composer.task.2 : (toolkit phase : phase) : description
