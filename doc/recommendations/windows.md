# Recommendation Windows

Nous vous recommendons d'utiliser le sous système **Linux** pour executer les différentes commandes. Cela augmentera grandement la rapidité d'execution.

De plus, vous pouvez utiliser **ZSH** avec **Starship** prompt pour améliorer votre workflow.

---

## Table des matières
<!-- TOC -->
* [Recommendation Windows](#recommendation-windows)
  * [Table des matières](#table-des-matières)
  * [Prérequis](#prérequis)
  * [Installation d'Ubuntu](#installation-dubuntu)
  * [Installation de ZSH](#installation-de-zsh)
  * [Installation de Sharship prompt](#installation-de-sharship-prompt)
  * [Configuration de GIT](#configuration-de-git)
  * [Activer la distribution Ubuntu sur Docker Desktop](#activer-la-distribution-ubuntu-sur-docker-desktop)
  * [Installation de Node.JS avec NVM](#installation-de-nodejs-avec-nvm)
  * [Mettre à jour les permissions du serveur Apache (si nécéssaire ⚠️)](#mettre-à-jour-les-permissions-du-serveur-apache--si-nécéssaire--)
<!-- TOC -->

## Prérequis
- Docker Desktop
- Avoir 5Go ou plus d'espace libre
- Avoir Windows Terminal
- Avoir activé le sous système Linux

## Installation d'Ubuntu
- Télécharger et installer Ubuntu depuis le [Windows Store](https://apps.microsoft.com/store/detail/ubuntu/9PDXGNCFSCZV?hl=en-ai&gl=ai)
- Une fois l'installation terminée, renseigner ses informations de connexion
- Mettre à jour la liste des paquets 
```shell
sudo apt update
sudo apt upgrade
```

## Installation de ZSH
- Installer ZSH
```shell
sudo apt install -y zsh
```
- Changer le shell par défaut
```shell
chsh -s /usr/bin/zsh
```

## Installation de Sharship prompt
- Télécharger et installer la police [**FiraCode**](https://github.com/ryanoasis/nerd-fonts/releases/download/v2.3.3/FiraCode.zip)
- Télécharger et installer Starship
```shell
curl -sS https://starship.rs/install.sh | sh -s -- -y
echo 'eval "$(starship init zsh)"' >> ~/.zshrc
source ~/.zshrc
```

## Configuration de GIT
- Renseigner ses identifiants globalement
```shell
git config --global user.name "[VOTRE_PSEUDONYME]"
git config --global user.email "[VOTRE_EMAIL]"
```

## Activer la distribution Ubuntu sur Docker Desktop
- Se rendre dans les paramètres de **Docker Desktop** `Resources > WSL Integration`
- Activer la distribution **Ubuntu**
  <img src="http://noah-grebet.com/symfony-docker/docker-ubuntu.png" alt="Preview Docker Ubuntu distro activation" style="width: 100%" />

## Installation de Node.JS avec NVM
- Télécharger et installer NVM
```shell
wget -qO- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.3/install.sh | bash
```
- Mettre à jour le fichier `~/.zshrc`
```shell
cat <<EOT >> ~/.zshrc
export NVM_DIR="$HOME/.nvm"
[ -s "$NVM_DIR/nvm.sh" ] && \.  
[ -s "$NVM_DIR/bash_completion" ] && \. "$NVM_DIR/bash_completion"  
EOT
```
```shell
source ~/.zshrc
```
- Installer la dernière version **LTS** de **Node.JS**
```shell
nvm install --lts
```

--- 

[◄ Revenir sur la première page](../../Readme.md)
|
[Recommendations MacOS ►](./macos.md)
