# Module : git

Ce module permet d'interagir avec [Git](http://git-scm.com/), le gestionnaire de sources décentralisé.

**Attention :** ce module ne fournit pas Git, il revient à l'utilisateur de l'installer.

## Directives de configuration

* **git.branch** (défaut : *master*) : Le nom de la branche utilisée par défaut
* **git.remote** (défaut : *origin*) : Le nom du remote utilisé par défaut

Si besoin, surchargez les directives de configuration par défaut du module dans votre profil de configuration ou en ligne de commande.

## Tâches du module

### git.pull

Pull la branche **git.branch** depuis le remote **git.remote**

### git.push

Push la branche courante vers une branche du même nom sur le remote **git.remote**

### git.update-submodules

Initialise et met à jour les sous-modules de manière récursive
