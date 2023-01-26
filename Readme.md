# Symfony 6.2.5 Docker template

Template Symfony v6.2.5 avec Docker sur un serveur Apache et une base de donnée MariaDB v10.9.4

<!-- TOC -->
* [Prérequis](#prérequis)
* [Mise en route](#mise-en-route)
<!-- TOC -->

## Prérequis
- Node.js v18.* (LTS)
- Docker Desktop

## Mise en route
- Cloner le projet
- Se déplacer dans le dossier du projet
```shell
cd template
```
- Créer un fichier `.env` avec la strucuture du fichier `.env.example` et renseigner les credentials
```shell
cp .env.example .env
```
- Installer les dépendances JS
```shell
npm install
```
- Build les assets
```shell
npm run build
```
- Démarrer les conteneurs Docker
```shell
# Lancer les conteneurs
docker compose up --build

# Stopper les conteneurs
docker compose down
```
- Executer des commandes dans le conteneur
```shell
docker compose exec php_8.2 [Commande]
```
