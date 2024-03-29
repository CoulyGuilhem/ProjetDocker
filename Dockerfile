FROM php:7.4-apache
RUN a2enmod rewrite
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
COPY ./app/ /var/www/html/
WORKDIR /var/www/html/
