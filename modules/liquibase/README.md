#### Module : liquibase

Présentation du module.

##### Installation

Ajoutez les lignes suivantes à votre fichier ```build.xml```, aux endroits indiqués :

Après l'import du module toolkit :
 ```xml
 <import file="${toolkit.basedir}/modules/liquibase/module.xml" />
 ```

Dans la *target* ```setprofile``` :
```xml
<property file="${toolkit.basedir}/modules/liquibase/build.properties" />
```

##### Directives de configuration

* **liquibase.directive.1** (défaut : val) : description
* **liquibase.directive.2** (défaut : val) : description

##### Tâches

* **liquibase.task.1** : (toolkit phase : *phase*) : description
* **liquibase.task.2** : (toolkit phase : *phase*) : description
