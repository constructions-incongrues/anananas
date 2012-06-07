##### Module : symfony1

Présentation du module.

* Activé par défaut : **non**

###### Installation

Ajoutez les lignes suivantes à votre fichier ```build.xml```, aux endroits indiqués :

Après l'import du module toolkit :
 ```xml
 <import file="${toolkit.basedir}/modules/symfony1/module.xml" />
 ```

Dans la *target* ```setprofile``` :
```xml
<property file="${toolkit.basedir}/modules/symfony1/build.properties" />
```

###### Directives de configuration

* symfony1.directive.1 (valeur par défaut : val) : description
* symfony1.directive.2 (valeur par défaut : val) : description

###### Tâches

* symfony1.task.1 : (toolkit phase : phase) : description
* symfony1.task.2 : (toolkit phase : phase) : description
