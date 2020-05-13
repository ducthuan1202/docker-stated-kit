FROM php:fpm-alpine

LABEL maintainer="Nguyen Duc Thuan <ducthuan1202@gmail.com>"

RUN apk --update --no-cache add git

RUN docker-php-ext-install pdo_mysql

# COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# CMD composer install ;  php-fpm 
CMD php-fpm 

EXPOSE 9000