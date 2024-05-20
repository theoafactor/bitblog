FROM php:8.2-apache
COPY . /var/www/html

## install important plugins or extensions
RUN docker-php-ext-install pdo pdo_mysql

## Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

## add vim for some peculiarities in updating the containers
RUN apt-get update && apt-get install -y vim

RUN apt-get install zip unzip

WORKDIR /var/www/html

## install composer dependencies
RUN composer install


## start apache
CMD apachectl -D FOREGROUND

