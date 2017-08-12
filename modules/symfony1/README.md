#### Module : symfony1

Présentation du module.

##### Installation

Ajoutez les lignes suivantes à votre fichier ```build.xml```, aux endroits indiqués :

Après l'import du module toolkit :
 ```xml
 <import file="${toolkit.dir.base}/modules/symfony1/module.xml" />
 ```

Dans la *target* ```setprofile``` :
```xml
<property file="${toolkit.dir.base}/modules/symfony1/build.properties" />
```

##### Directives de configuration

* **symfony1.directive.1** (défaut : val) : description
* **symfony1.directive.2** (défaut : val) : description

##### Tâches

* **symfony1.task.1** : (toolkit phase : *phase*) : description
* **symfony1.task.2** : (toolkit phase : *phase*) : description
