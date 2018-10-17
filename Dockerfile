FROM php:7.1-fpm

RUN apt-get update && \
  apt-get install -y git unzip && \
  curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
  git clone https://github.com/Sotalbireo/hakoniwa.git /var/www/html && \
  composer install
