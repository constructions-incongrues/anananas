#### Module : toolkit

Présentation du module.

##### Installation

Ajoutez les lignes suivantes à votre fichier ```build.xml```, aux endroits indiqués :

Après l'import du module toolkit :
 ```xml
 <import file="${toolkit.dir.base}/modules/toolkit/module.xml" />
 ```

Dans la *target* ```setprofile``` :
```xml
<property file="${toolkit.dir.base}/modules/toolkit/module.properties" />
```

##### Directives de configuration

* **toolkit.directive.1** (défaut : val) : description
* **toolkit.directive.2** (défaut : val) : description

##### Tâches

* **toolkit.task.1** : (toolkit phase : *phase*) : description
* **toolkit.task.2** : (toolkit phase : *phase*) : description
