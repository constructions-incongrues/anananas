#### Module : cloudflare

Ce module permet d'interagir avec l'API Cloudflare.

##### Installation

```
toolkit.modules=cloudflare
```

##### Directives de configuration

```
# Adresse email du compte Cloudflare
cloudflare.authEmail=

# Clé d'API du compte Cloudflare
cloudflare.authKey=

# Endpoint de l'API Cloudflare
cloudflare.endpoint=https://api.cloudflare.com/client/v4

# Identifiant de la zone DNS sur laquelle le module va agir
cloudflare.zoneId=
```

##### Les tâches et leurs paramètres

* **cloudflare.purgeAll** : Purge **complète** du cache Cloudflare pour la zone
* **cloudflare.purgeUrl** : Purge d'une URL du cache de la zone
    * **url** : L'URL à purger
