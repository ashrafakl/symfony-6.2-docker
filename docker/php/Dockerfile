FROM php:8.2-fpm
RUN apt-get update --fix-missing && apt-get install -y \
		libfreetype6-dev \
		libjpeg62-turbo-dev \
		libpng-dev \
	&& docker-php-ext-configure gd --with-freetype --with-jpeg \
	&& docker-php-ext-install -j$(nproc) gd
RUN apt-get install -y git libxml2-dev libzip-dev libicu-dev libssl-dev
RUN apt-get install apt-utils -y
RUN docker-php-ext-configure intl \
    && docker-php-ext-install -j$(nproc) intl
RUN docker-php-ext-configure bcmath \
    && docker-php-ext-install -j$(nproc) bcmath
RUN docker-php-ext-configure mysqli \
    && docker-php-ext-install -j$(nproc) mysqli
RUN docker-php-ext-configure pdo_mysql \
    && docker-php-ext-install -j$(nproc) pdo_mysql
RUN docker-php-ext-configure soap \
    && docker-php-ext-install -j$(nproc) soap
RUN docker-php-ext-configure zip \
    && docker-php-ext-install -j$(nproc) zip

RUN pecl install xdebug-3.2.0 \
    && docker-php-ext-enable xdebug \
    && echo "xdebug.mode = debug,develop,coverage" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.

RUN pecl install mongodb

RUN docker-php-ext-enable mongodb
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

