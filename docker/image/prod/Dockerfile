# syntax=docker/dockerfile:1
FROM php:8.2-apache

#
# Install system packages & dependencies
#

RUN apt-get update && apt-get install -y wget locales

# Composer
RUN wget -O composer-setup.php https://getcomposer.org/installer \
	&& php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
	&& rm ./composer-setup.php

#
# PHP extensions
#

# GD
RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev \
	&& docker-php-ext-configure gd --with-freetype --with-jpeg \
	&& docker-php-ext-install -j$(nproc) gd

# zip
RUN apt-get install -y libzip-dev \
	&& docker-php-ext-configure zip \
	&& docker-php-ext-install -j$(nproc) zip

# intl
RUN apt-get install -y libicu-dev \
	&& docker-php-ext-configure intl \
	&& docker-php-ext-install -j$(nproc) intl

# exif
RUN apt-get install -y exiftool \
	&& docker-php-ext-configure exif \
	&& docker-php-ext-install -j$(nproc) exif

# MySQL
RUN docker-php-ext-install -j$(nproc) mysqli pdo pdo_mysql

# Install Node.js
RUN curl -fsSL https://deb.nodesource.com/setup_lts.x | bash - && apt-get install -y nodejs

# Configure Apache2
COPY docker/apache/metin2.conf /etc/apache2/sites-available/metin2.conf
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf && \
    a2enmod rewrite && \
    a2enmod remoteip && \
    a2dissite 000-default && \
    a2ensite metin2

# Copy the configuration files
COPY docker/php/*.ini /usr/local/etc/php/conf.d/
COPY docker/php/prod/*.ini /usr/local/etc/php/conf.d/

# Copy the source code
RUN mkdir /app
WORKDIR /app
COPY . .

# Install the dependencies
RUN composer install --no-ansi --no-interaction --no-plugins --no-progress --no-scripts --optimize-autoloader
RUN npm ci && npm run build

# Make the init script executable
RUN chmod +x /app/docker/init.sh

# Expose the API on port 80
EXPOSE 80

# Run supervisord for handling the container services
ENTRYPOINT ["/bin/sh", "-c"]
CMD ["/app/docker/init.sh"]
