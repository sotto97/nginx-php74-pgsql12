FROM php:8.1-fpm

ENV TZ Asia/Tokyo
ENV COMPOSER_ALLOW_SUPERUSER 1

# 既存のコマンドをエイリアスに追加
RUN echo "alias ll='ls -al'" >> /root/.bashrc

# シェルスクリプト内で . コマンドを使用して .bashrc を読み込む
RUN echo ". /root/.bashrc" >> /root/.bash_profile

# Laravelアプリ動作のために必要なパッケージをインストール
RUN apt-get update
RUN apt-get install -y nodejs npm
RUN npm install --save-dev vite

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
RUN chown root:root -R ./

ENV COMPOSER_ALLOW_SUPERUSER 1

ENV COMPOSER_HOME /composer

ENV PATH $PATH:/composer/vendor/bin

WORKDIR /data/www
