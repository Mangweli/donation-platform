FROM php:8.1-fpm

RUN rm -rf /var/lib/apt/lists/ && curl -sL https://deb.nodesource.com/setup_17.x | bash -

RUN docker-php-ext-install bcmath pdo_mysql

RUN apt-get update
RUN apt-get install -y git zip unzip curl gnupg2 nodejs

USER www-data

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

#RUN chown -R $USER:www-data .
#RUN find . -type f -exec chmod 664 {} \;   
#RUN find . -type d -exec chmod 775 {} \;
#RUN chgrp -R www-data storage bootstrap/cache
#RUN chmod -R ug+rwx storage bootstrap/cache

#RUN chmod -r 755 /var/www/storage/logs
EXPOSE 9000
