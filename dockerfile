FROM php:8.1-apache
COPY . /var/www/html

## install important plugins or extensions
RUN docker-php-ext-install pdo pdo_mysql

## Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

## install composer dependencies
RUN composer install

## add vim for some peculiarities in updating the containers
RUN apt-get update && apt-get install -y vim

## start apache
CMD apachectl -D FOREGROUND

