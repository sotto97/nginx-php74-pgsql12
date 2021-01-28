FROM php:7.4-fpm

ENV TZ Asia/Tokyo
ENV COMPOSER_ALLOW_SUPERUSER 1

# install Lib for composer
RUN apt-get update -qq && \
  apt-get install --no-install-recommends -y libpq-dev git zip unzip libonig-dev && \
  apt-get clean && \
  rm -rf /var/cache/apt

RUN docker-php-ext-install mbstring pdo pdo_pgsql

COPY php.ini /usr/local/etc/php/

# install Composer
COPY --from=composer /usr/bin/composer /usr/bin/composer

# change owner
RUN chown www-data:www-data -R ./

ENV COMPOSER_ALLOW_SUPERUSER 1

ENV COMPOSER_HOME /composer

ENV PATH $PATH:/composer/vendor/bin

WORKDIR /var/www
