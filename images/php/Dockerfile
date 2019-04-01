FROM php:7.2-cli

#Image Dependencies
RUN apt-get update && apt-get install -y \
        curl

#Installing Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#PHP Configuration
#ADD php.ini /usr/local/etc/php/conf.d/40-custom.ini

WORKDIR /var/www


#From documentation: "The main purpose of a CMD is to provide defaults for an executing container.
#These defaults can include an executable, or they can omit the executable,
#in which case you must specify an ENTRYPOINT instruction as well."
CMD [ "php" ]