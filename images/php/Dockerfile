FROM php:7.2-fpm

#Image Dependencies
RUN apt-get update && apt-get install -y \
        curl \
        && pecl install xdebug-2.6.1 \
        && docker-php-ext-enable xdebug

#Installing Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www


#From documentation: "The main purpose of a CMD is to provide defaults for an executing container.
#These defaults can include an executable, or they can omit the executable,
#in which case you must specify an ENTRYPOINT instruction as well."
CMD [ "php" ]