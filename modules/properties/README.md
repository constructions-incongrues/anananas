##### Module : properties

Présentation du module.

* Activé par défaut : **non**

###### Installation

Ajoutez les lignes suivantes à votre fichier ```build.xml```, aux endroits indiqués :

Après l'import du module toolkit :
 ```xml
 <import file="${toolkit.basedir}/modules/properties/module.xml" />
 ```

Dans la *target* ```setprofile``` :
```xml
<property file="${toolkit.basedir}/modules/properties/build.properties" />
```

###### Directives de configuration

* properties.directive.1 (valeur par défaut : val) : description
* properties.directive.2 (valeur par défaut : val) : description

###### Tâches

* properties.task.1 : (toolkit phase : phase) : description
* properties.task.2 : (toolkit phase : phase) : description
