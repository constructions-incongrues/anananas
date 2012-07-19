#### Module : rsync

Présentation du module.

##### Installation

Ajoutez les lignes suivantes à votre fichier ```build.xml```, aux endroits indiqués :

Après l'import du module toolkit :
 ```xml
 <import file="${toolkit.basedir}/modules/rsync/module.xml" />
 ```

Dans la *target* ```setprofile``` :
```xml
<property file="${toolkit.basedir}/modules/rsync/build.properties" />
```

##### Directives de configuration

* **rsync.directive.1** (défaut : val) : description
* **rsync.directive.2** (défaut : val) : description

##### Tâches

* **rsync.task.1** : (toolkit phase : *phase*) : description
* **rsync.task.2** : (toolkit phase : *phase*) : description
