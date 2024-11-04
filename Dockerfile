# PHP Server
FROM php:8.2-fpm-alpine

# Change the DocumentRoot in the Apache configuration
#RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html

COPY . .

RUN chmod 777 -R bootstrap storage


