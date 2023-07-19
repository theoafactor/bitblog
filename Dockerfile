FROM php:7.2-apache
COPY . /var/www/html/
WORKDIR /var/www/html/
EXPOSE 80

RUN apt-get update -y
RUN apt-get install vim -y 

# RUN docker-php-ext-install -j$(nproc) gd
RUN docker-php-ext-install mysqli pdo pdo_mysql

