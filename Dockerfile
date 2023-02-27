FROM php:8.2-apache

# Installation de Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Installation des extensions PHP nécessaires pour Symfony
RUN apt-get update \
    && apt-get install -y --no-install-recommends locales apt-utils git libicu-dev g++ libpng-dev libxml2-dev libzip-dev libonig-dev libxslt-dev wget unzip;

RUN echo "en_US.UTF-8 UTF-8" > /etc/locale.gen && \
    echo "fr_FR.UTF-8 UTF-8" >> /etc/locale.gen && \
    locale-gen \

RUN docker-php-ext-configure intl
RUN docker-php-ext-install pdo pdo_mysql gd opcache intl zip calendar dom mbstring zip gd xsl
RUN pecl install apcu && docker-php-ext-enable apcu

# Installation de ZSH, Starship et FiraCode font
RUN apt-get install -y zsh;
RUN chsh -s /bin/zsh;
RUN wget https://github.com/ryanoasis/nerd-fonts/releases/download/v2.3.3/FiraCode.zip
RUN unzip FiraCode.zip -d ~/.fonts
RUN curl -sS https://starship.rs/install.sh | sh -s -- -y
RUN echo 'eval "$(starship init zsh)"' >> ~/.zshrc


# Configuration du serveur Apache
COPY ./conf/apache.conf /etc/apache2/sites-available/apache.conf
RUN a2dissite 000-default.conf \
    && a2ensite apache.conf \
    && a2enmod rewrite

# Copie des fichiers de l'application Symfony
WORKDIR /var/www

COPY . .

# Exposition du port 80 pour Apache
EXPOSE 80

# Démarrage d'Apache en arrière-plan
CMD ["apache2-foreground"]