# Recommendation MacOS

Nous vous recommandons d'utiliser **ZSH** couplé à **Starship** prompt avec le terminal [**Warp**](https://www.warp.dev/) pour améliorer votre workflow.

---

## Table des matières
<!-- TOC -->
* [Recommendation MacOS](#recommendation-macos)
  * [Table des matières](#table-des-matières)
  * [Prérequis](#prérequis)
  * [Installation de ZSH](#installation-de-zsh)
  * [Installation de Sharship prompt](#installation-de-sharship-prompt)
  * [Installation de Node.JS avec NVM](#installation-de-nodejs-avec-nvm)
<!-- TOC -->

## Prérequis
- Docker Desktop
- Avoir Homebrew
- Avoir 5Go ou plus d'espace libre

## Installation de ZSH
- Installer ZSH via Homebrew
```shell
brew install zsh
```

## Installation de Sharship prompt
- Télécharger et installer la police [**FiraCode**](https://github.com/ryanoasis/nerd-fonts/releases/download/v2.3.3/FiraCode.zip)
```shell
brew install wget unzip
wget https://github.com/ryanoasis/nerd-fonts/releases/download/v2.3.3/FiraCode.zip
unzip FiraCode.zip -d ~/Library/Fonts
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
brew install nvm
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
[Recommendations Linux ►](./linux.md)