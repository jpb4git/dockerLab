FROM php:7.3-apache-buster

MAINTAINER  JIP <dev@guitaresphere.com> 

#COPY index.html /var/www/html/index.html
COPY src /var/www/html

# execution d'une commande shell dans le container
RUN docker-php-ext-install pdo_mysql

# dans le process !!!  container !
RUN chown www-data:www-data /var/www/html/upload

