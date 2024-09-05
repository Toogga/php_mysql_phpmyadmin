# FROM php:7.3-apache
# RUN apt-get update && apt-get upgrade -y
# # RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
# RUN docker-php-ext-install mysqli mysqlnd pdo pdo_mysql zip 
# EXPOSE 80


FROM php:8.0.2-apache
RUN apt-get update && apt-get upgrade -y
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN docker-php-ext-install pdo_mysql && docker-php-ext-enable pdo_mysql
# RUN docker-php-ext-install mysqli 
EXPOSE 80