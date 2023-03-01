# Commandes à connaitre
Liste des commandes pratiques à connaitre.

--- 

## Table des matières
<!-- TOC -->
* [Commandes à connaitre](#commandes-à-connaitre)
  * [Table des matières](#table-des-matières)
  * [Supprimer les conteneurs](#supprimer-les-conteneurs)
  * [Se connecter au conteneur Apache](#se-connecter-au-conteneur-apache)
  * [Execution des commandes](#execution-des-commandes)
<!-- TOC -->

## Supprimer les conteneurs
```shell
docker compose down
```

## Se connecter au conteneur Apache
```shell
docker exec -it php_8.2 zsh
```

## Execution des commandes
```shell
docker compose exec php_8.2 [COMMANDE]
```


---

[◄ Revenir sur la première page](../../Readme.md)
|
[Mettre à jour les permissions du serveur Apache ►](../misc/permissions.md)