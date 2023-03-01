# Serveur Mail
Ce template utilise **[mailcatcher](https://hub.docker.com/r/schickling/mailcatcher)** pour la reception de mail.

---

## Table des matières
<!-- TOC -->
* [Serveur Mail](#serveur-mail)
  * [Table des matières](#table-des-matières)
  * [Serveur SMTP](#serveur-smtp)
  * [Le DSN](#le-dsn)
  * [Consommer les emails](#consommer-les-emails)
  * [Accéder au mailcatcher](#accéder-au-mailcatcher)
<!-- TOC -->

## Serveur SMTP
Le serveur SMTP est accessible au port `1025`.

## Le DSN
Le DSN est initialisé avec `smtp://:@mailcatcher:1025`.

Le transporteur est initialisé avec `doctrine://default`.

## Consommer les emails
Si vous avez besoin d'envoyer des mails via l'application, il faut consommer ces derniers avec cette commande :
```shell
docker compose exec php_8.2 bin/console messenger:consume
```

## Accéder au mailcatcher
Le **mailcatcher** est accessible au port `1080`.

[Cliquez ici pour ouvrir le mailcatcher en local](http://localhost:1080/).


---

[◄ Revenir sur la première page](../../Readme.md)
|
[Commandes à connaitre ►](../misc/commands.md)