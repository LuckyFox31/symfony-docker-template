<img src="http://noah-grebet.com/symfony-docker/Thumbnail.png" alt="Thumbnail Docker Symfony" style="width: 100%" />

<p align="center">
  <img alt="GitHub last commit (branch)" src="https://img.shields.io/github/last-commit/LuckyFox31/symfony-docker-template/main?style=for-the-badge">
  <img alt="GitHub Release Date" src="https://img.shields.io/github/release-date/LuckyFox31/symfony-docker-template?style=for-the-badge">
  <img alt="GitHub contributors" src="https://img.shields.io/github/contributors/LuckyFox31/symfony-docker-template?style=for-the-badge">
  <img alt="GitHub issues" src="https://img.shields.io/github/issues-raw/LuckyFox31/symfony-docker-template?style=for-the-badge">
  <img alt="GitHub closed issues" src="https://img.shields.io/github/issues-closed-raw/LuckyFox31/symfony-docker-template?style=for-the-badge">
  <img alt="GitHub watchers" src="https://img.shields.io/github/watchers/LuckyFox31/symfony-docker-template?style=for-the-badge">
  <img alt="GitHub forks" src="https://img.shields.io/github/forks/LuckyFox31/symfony-docker-template?style=for-the-badge">
  <img alt="GitHub Repo stars" src="https://img.shields.io/github/stars/LuckyFox31/symfony-docker-template?style=for-the-badge">
  <img alt="GitHub" src="https://img.shields.io/github/license/LuckyFox31/symfony-docker-template?style=for-the-badge">
  <img alt="GitHub repo size" src="https://img.shields.io/github/repo-size/LuckyFox31/symfony-docker-template?style=for-the-badge">
</p>

# Template Docker pour Symfony 6.2.5

Template Docker pour un projet **Symfony 6.2.5** type **webapp**.

> ⚠️ **Cette image est conçue pour un environnement de développement, ne pas utiliser sur un environnement de production.**

---

## Table des matières
<!-- TOC -->
* [Template Docker pour Symfony 6.2.5](#template-docker-pour-symfony-625)
  * [Table des matières](#table-des-matières)
  * [Conteneurs disponibles](#conteneurs-disponibles)
  * [Prérequis](#prérequis)
  * [Installation en local](#installation-en-local)
    * [Récupération du projet en local](#récupération-du-projet-en-local)
    * [Création des fichiers nécéssaires](#création-des-fichiers-nécéssaires)
    * [Installation des dépendances Javascript](#installation-des-dépendances-javascript)
    * [Lancement de Docker](#lancement-de-docker)
    * [Installer les dépendances Symfony](#installer-les-dépendances-symfony)
  * [Serveur Mail](#serveur-mail)
    * [Serveur SMTP](#serveur-smtp)
    * [Le DSN](#le-dsn)
    * [Consommer les emails](#consommer-les-emails)
    * [Accéder au mailcatcher](#accéder-au-mailcatcher)
  * [Commandes à connaitre](#commandes-à-connaitre)
    * [Supprimer les conteneurs](#supprimer-les-conteneurs)
    * [Se connecter au conteneur Apache](#se-connecter-au-conteneur-apache)
    * [Execution des commandes](#execution-des-commandes)
<!-- TOC -->

## Conteneurs disponibles

| Nom du conteneur | Image                                                                                                                                                                   | Version  | Ports                                      |
|------------------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------|----------|--------------------------------------------|
| `web`            | [`Dockerfile`](Dockerfile)                                                                                                                                              | `8.2`    | `8001:80`                                  |
| `database`       | [`mariadb:10.9.4`](https://hub.docker.com/layers/library/mariadb/10.9.4/images/sha256-5834aa3731eda1ab657a3e91370895b3b6fe98b1e720c0b1167877f714345cd3?context=explore) | `10.9.4` | `3306:3306`                                |
| `phpmyadmin`     | [`phpmyadmin`](https://hub.docker.com/_/phpmyadmin)                                                                                                                     | `latest` | `8080:80`                                  |
| `mailcatcher`    | [`schickling/mailcatcher`](https://hub.docker.com/r/schickling/mailcatcher)                                                                                             | `latest` | `1080:1080` (WEB) <br/> `1025:1025` (SMTP) |

## Prérequis
- Node.js v18.+ (LTS)
- Docker Desktop
- Avoir 3Go ou plus d'espace libre

## Installation en local

### Récupération du projet en local
- Cloner le repository git sur sa machine
```shell
git clone https://github.com/LuckyFox31/symfony-docker-template.git
```
- Se déplacer dans le repertoire du projet
```shell
cd symfony-docker-template
```

### Création des fichiers nécéssaires
- Créer un fichier .env avec la strucuture du fichier .env.example et renseigner les credentials
```shell
cp .env.example .env
```

### Installation des dépendances Javascript
- Installer les dépendances puis construire les assets
```shell
npm install

npm run build
```

### Lancement de Docker
- Lancer les différents conteneurs via le `docker-compose` et construire l'image `Dockerfile`
```shell
docker compose up --build -d
```

### Installer les dépendances Symfony
- Se connecter au conteneur Docker intitulé "web"
```shell
docker ps 

docker exec -it [ID_DU_CONTENEUR] zsh
```
- Installer les dépendances
```shell
composer install
```

## Serveur Mail
Ce template utilise **[mailcatcher](https://hub.docker.com/r/schickling/mailcatcher)** pour la reception de mail.

### Serveur SMTP
Le serveur SMTP est accessible au port `1025`.

### Le DSN
Le DSN est initialisé avec `smtp://:@mailcatcher:1025`.  

Le transporteur est initialisé avec `doctrine://default`.

### Consommer les emails
Si vous avez besoin d'envoyer des mails via l'application, il faut consommer ces derniers avec cette commande : 
```shell
docker compose exec php_8.2 bin/console messenger:consume
```

### Accéder au mailcatcher
Le **mailcatcher** est accessible au port `1080`.

[Cliquez ici pour ouvrir le mailcatcher en local](http://localhost:1080/).

## Commandes à connaitre

### Supprimer les conteneurs
```shell
docker compose down
```

### Se connecter au conteneur Apache
```shell
docker exec -it php_8.2 zsh
```

### Execution des commandes
```shell
docker compose exec php_8.2 [COMMANDE]
```
