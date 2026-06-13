# syntax=docker/dockerfile:1
FROM dunglas/frankenphp:php8.2-alpine

#
# Install system packages & dependencies
#

RUN apk update && apk add wget npm

# Composer
RUN wget -O composer-setup.php https://getcomposer.org/installer \
	&& php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
	&& rm ./composer-setup.php

#
# PHP extensions
#
RUN install-php-extensions pcntl gd zip intl exif mysqli pdo pdo_mysql

# Copy the source code
WORKDIR /app
COPY . /app

# Install the dependencies
RUN composer install --no-ansi --no-interaction --no-plugins --no-progress --no-scripts --optimize-autoloader
RUN npm ci && npm run build

# Make the init script executable
RUN chmod +x /app/docker/init-frankenphp.sh

# Expose the API on port 80
EXPOSE 80

# Run supervisord for handling the container services
ENTRYPOINT ["/bin/sh", "-c"]
CMD ["/app/docker/init-frankenphp.sh"]
