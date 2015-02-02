# Module : bower

Ce module permet d'interagir avec [Bower](http://bower.io), un gestionnaire de dépendances front end.

**Attention :** ce module ne fournit pas Bower en lui-même, il revient à l'utilisateur de l'installer.

## Directives de configuration

* **bower.executable** (défaut : *bower*) : chemin vers l'exécutable Bower

Si besoin, surchargez les directives de configuration par défaut du module dans votre profil de configuration.

## Tâches du module

### install

Installe les dépendances (```bower install```). cf. http://bower.io/docs/api/#install
