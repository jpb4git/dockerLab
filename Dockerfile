FROM php:7.3-apache-buster

# ENV definition de valeur par defaut 
# 
#  WORKDIR  dossier exec tomde dans ce WORKDIR = /var/www/html   
#
# USER root , www-data switch from user to another 
# for execution  like 
# USER www-data
# RUN composer install  --no-scripts ... (under USER www-data )  
# USER root // then go back to root user 
#
#
# voir gitlab_ci.yml
#


MAINTAINER  JIP <dev@guitaresphere.com> 

#COPY index.html /var/www/html/index.html
COPY --chown=www-data:www-data src /var/www/html

# execution d'une commande shell dans le container
RUN docker-php-ext-install pdo_mysql

# dans le process !!!  container !
RUN chown www-data:www-data /var/www/html/upload

