#### Module : @module.name@

Présentation du module.

##### Installation

Ajoutez les lignes suivantes à votre fichier ```build.xml```, aux endroits indiqués :

Après l'import du module toolkit :
 ```xml
 <import file="${toolkit.basedir}/modules/@module.name@/module.xml" />
 ```

Dans la *target* ```setprofile``` :
```xml
<property file="${toolkit.basedir}/modules/@module.name@/build.properties" />
```

##### Directives de configuration

* **@module.name@.directive.1** (défaut : val) : description
* **@module.name@.directive.2** (défaut : val) : description

##### Tâches

* **@module.name@.task.1** : (toolkit phase : *phase*) : description
* **@module.name@.task.2** : (toolkit phase : *phase*) : description
