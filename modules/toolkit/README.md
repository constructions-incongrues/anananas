##### Module : toolkit

Présentation du module.

* Activé par défaut : **non**

###### Installation

Ajoutez les lignes suivantes à votre fichier ```build.xml```, aux endroits indiqués :

Après l'import du module toolkit :
 ```xml
 <import file="${toolkit.basedir}/modules/toolkit/module.xml" />
 ```

Dans la *target* ```setprofile``` :
```xml
<property file="${toolkit.basedir}/modules/toolkit/build.properties" />
```

###### Directives de configuration

* toolkit.directive.1 (valeur par défaut : val) : description
* toolkit.directive.2 (valeur par défaut : val) : description

###### Tâches

* toolkit.task.1 : (toolkit phase : phase) : description
* toolkit.task.2 : (toolkit phase : phase) : description
