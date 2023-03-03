# Recommendation Linux

Nous vous recommandons d'utiliser **ZSH** couplé à **Starship** prompt pour améliorer votre workflow.
---

## Table des matières
<!-- TOC -->
* [Recommendation Linux](#recommendation-linux)
  * [Nous vous recommandons d'utiliser **ZSH** couplé à **Starship** prompt pour améliorer votre workflow.](#nous-vous-recommandons-dutiliser-zsh-couplé-à-starship-prompt-pour-améliorer-votre-workflow)
  * [Table des matières](#table-des-matières)
  * [Prérequis](#prérequis)
  * [Mettre à jour la liste des paquets](#mettre-à-jour-la-liste-des-paquets)
  * [Installation de ZSH](#installation-de-zsh)
  * [Installation de Sharship prompt](#installation-de-sharship-prompt)
  * [Installation de Node.JS avec NVM](#installation-de-nodejs-avec-nvm)
<!-- TOC -->

## Prérequis
- Docker Desktop
- Avoir 5Go ou plus d'espace libre
- Avoir Windows Terminal
- Avoir activé le sous système Linux

## Mettre à jour la liste des paquets
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
```shell
sudo apt-get install -y wget unzip;
wget https://github.com/ryanoasis/nerd-fonts/releases/download/v2.3.3/FiraCode.zip
unzip FiraCode.zip -d ~/.fonts
```
- Télécharger et installer Starship
```shell
curl -sS https://starship.rs/install.sh | sh -s -- -y
echo 'eval "$(starship init zsh)"' >> ~/.zshrc
source ~/.zshrc
```

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
[Installation en local ►](../installation/installation.md)
