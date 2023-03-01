# Installation en local

Installation du template **Docker** pour **Symfony** en local.

--- 

## Table des matières
<!-- TOC -->
* [Installation en local](#installation-en-local)
  * [Table des matières](#table-des-matières)
  * [Récupération du projet en local](#récupération-du-projet-en-local)
  * [Création des fichiers nécéssaires](#création-des-fichiers-nécéssaires)
  * [Installation des dépendances Javascript](#installation-des-dépendances-javascript)
  * [Lancement de Docker](#lancement-de-docker)
  * [Installer les dépendances Symfony](#installer-les-dépendances-symfony)
<!-- TOC -->


## Récupération du projet en local
- Cloner le repository git sur sa machine
```shell
git clone https://github.com/LuckyFox31/symfony-docker-template.git
```
- Se déplacer dans le repertoire du projet
```shell
cd symfony-docker-template
```

## Création des fichiers nécéssaires
- Créer un fichier .env avec la strucuture du fichier .env.example et renseigner les credentials
```shell
cp .env.example .env
```

## Installation des dépendances Javascript
- Installer les dépendances puis construire les assets
```shell
npm install

npm run build
```

## Lancement de Docker
- Lancer les différents conteneurs via le `docker-compose` et construire l'image `Dockerfile`
```shell
docker compose up --build -d
```

## Installer les dépendances Symfony
- Se connecter au conteneur Docker intitulé "web"
```shell
docker ps 

docker exec -it [ID_DU_CONTENEUR] zsh
```
- Installer les dépendances
```shell
composer install
```

---

[◄ Revenir sur la première page](../../Readme.md)
|
[Serveur mail ►](../misc/mail-server.md)