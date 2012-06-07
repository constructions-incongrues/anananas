##### Module : development

Présentation du module.

* Activé par défaut : **non**

###### Installation

Ajoutez les lignes suivantes à votre fichier ```build.xml```, aux endroits indiqués :

Après l'import du module toolkit :
 ```xml
 <import file="${toolkit.basedir}/modules/development/module.xml" />
 ```

Dans la *target* ```setprofile``` :
```xml
<property file="${toolkit.basedir}/modules/development/build.properties" />
```

###### Directives de configuration

* development.directive.1 (valeur par défaut : val) : description
* development.directive.2 (valeur par défaut : val) : description

###### Tâches

* development.task.1 : (toolkit phase : phase) : description
* development.task.2 : (toolkit phase : phase) : description
