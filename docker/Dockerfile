FROM php:8.3-fpm

WORKDIR "/app"

# Update
RUN apt-get update \
    &&  apt-get install -y --no-install-recommends \
        locales apt-utils git libicu-dev g++ libpng-dev libxml2-dev libzip-dev libonig-dev libxslt-dev unzip libpq-dev wget \
        apt-transport-https lsb-release ca-certificates bash make

# Install PHP extensions
RUN docker-php-ext-configure \
            intl \
    &&  docker-php-ext-install \
             opcache intl zip calendar dom mbstring gd xsl bcmath

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install xdebug
RUN pecl install xdebug-3.3.2 && docker-php-ext-enable xdebug

# Install APCu
RUN pecl install apcu && docker-php-ext-enable apcu


RUN git config --global --add safe.directory /app

# Cleanup
RUN apt-get clean
RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
