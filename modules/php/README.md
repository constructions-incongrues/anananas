#### Module : php

Ce module expose toutes les directives nécessaires à la configuration de PHP sur différentes plate-formes.

On pourra ainsi se servir des directives ```php.ini.*``` pour contrôller la configuration d'un projet via un fichier ```.htaccess-dist``` et la tâche [properties.apply]() par exemple.

##### Installation

Ajoutez les lignes suivantes au fichier ```build.xml``` du projet, aux endroits indiqués :
   
Après l'import du module toolkit :
 ```xml
 <import file="${toolkit.basedir}/modules/php/module.xml" />
 ```

Dans la *target* ```setprofile``` :
```xml
<property file="${toolkit.basedir}/modules/php/build.properties" />
```

Si besoin, surchargez les directives de configuration par défaut du module dans votre profil de configuration.

##### Directives de configuration

* **php.executable** (défaut: */usr/bin/php*) : Le chemin vers l'exécutable PHP à employer
* **php.ini.display_errors** (défaut : *true*) : cf. http://php.net/manual/errorfunc.configuration.php#ini.display-errors
* **php.ini.error_reporting** (défaut : *32767, soit E_ALL | E_STRICT*) : cf. http://php.net/manual/errorfunc.configuration.php#ini.error-reporting

##### Les tâches et leurs paramètres

Ce module n'expose aucune tâche.
