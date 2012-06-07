#### Module : filesystem

Présentation du module.

##### Installation

Ajoutez les lignes suivantes à votre fichier ```build.xml```, aux endroits indiqués :

Après l'import du module toolkit :
 ```xml
 <import file="${toolkit.basedir}/modules/filesystem/module.xml" />
 ```

Dans la *target* ```setprofile``` :
```xml
<property file="${toolkit.basedir}/modules/filesystem/build.properties" />
```

##### Directives de configuration

* **filesystem.directive.1** (défaut : val) : description
* **filesystem.directive.2** (défaut : val) : description

##### Tâches

* **filesystem.task.1** : (toolkit phase : *phase*) : description
* **filesystem.task.2** : (toolkit phase : *phase*) : description
