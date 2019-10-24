FROM php:7.2.6-apache

RUN apt-get update -y

#arquivo necessarios
RUN apt-get install -y \
    curl git supervisor \
    zip unzip apt-utils \
    zlib1g-dev libicu-dev wget gnupg g++ openssh-client libpng-dev

#extesao PHP no docker
RUN apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pdo_mysql \
    && docker-php-ext-install mbstring \
    && docker-php-ext-install zip \
    && docker-php-ext-install gd \
    && docker-php-ext-install pcntl \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN a2enmod rewrite

RUN mkdir -p /opt/data/public && \
    rm -rf /var/www/html && \
    ln -s /opt/data/public /var/www/html

WORKDIR /var/www/html
