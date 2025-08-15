FROM php:8.4-alpine@sha256:fada271bbcae269b0b5f93212432a70ffb0aa51de0fa9c925455e8a1afae65ca

WORKDIR /var/www

COPY ./ /var/www

RUN ./composer.phar install --no-dev

CMD [ "php", "./index.php" ]
