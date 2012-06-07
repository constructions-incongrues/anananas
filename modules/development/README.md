#### Module : development

Ce module regroupe des tâches destinées à faciliter la vie des développeurs souhaitant ajouter des fonctionnalités au toolkit.

##### Installation

Ajoutez les lignes suivantes au fichier ```build.xml``` du projet, aux endroits indiqués :
   
Après l'import du module toolkit :
 ```xml
 <import file="${toolkit.basedir}/modules/development/module.xml" />
 ```

Dans la *target* ```setprofile``` :
```xml
<property file="${toolkit.basedir}/modules/development/build.properties" />
```

Si besoin, surchargez les directives de configuration par défaut du module dans votre profil de configuration.

##### Directives de configuration

Ce module n'expose aucune directive de configuration.

##### Les tâches et leurs paramètres

* **development.generate.module** : (toolkit phase : *none*) : Cette tâche génère un nouveau module vide, prêt à être implémenté
    * **module.name** (obligatoire) : le nom du module

