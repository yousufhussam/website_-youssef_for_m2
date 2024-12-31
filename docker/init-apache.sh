#!/bin/bash
set -e

KERNEL_VERSION=$(uname -r)
KERNEL_ARCH=$(uname -m)
APACHE_VERSION=$(apache2 -v | head -n 1 | cut -d " " -f 3 | cut -d "/" -f 2)
PHP_VERSION=$(php -r "echo PHP_VERSION;")

echo "The Old Metin2 Project - Web management system"
echo "Kernel ${KERNEL_VERSION}, architecture: ${KERNEL_ARCH}, Apache: ${APACHE_VERSION}, PHP: ${PHP_VERSION}"

# Create storage directories if they don't exist
if [ ! -d /app/storage/app/public/ ]; then
	mkdir -p /app/storage/app/public/;
fi
if [ ! -d /app/storage/app/public/patch-data/ ]; then
	mkdir -p /app/storage/app/public/patch-data/;
fi

if [ ! -d /app/storage/framework/cache/data/ ]; then
	mkdir -p /app/storage/framework/cache/data/;
fi

if [ ! -d /app/storage/framework/sessions/ ]; then
	mkdir -p /app/storage/framework/sessions/;
fi

if [ ! -d /app/storage/framework/testing/ ]; then
	mkdir -p /app/storage/framework/sessions/;
fi

if [ ! -d /app/storage/framework/views/ ]; then
	mkdir -p /app/storage/framework/views/;
fi

if [ ! -d /app/storage/logs/ ]; then
	mkdir -p /app/storage/logs/;
fi

# Set folder permissions
chown -R www-data:www-data /app/storage

# Link filesystem paths
/usr/local/bin/php artisan storage:link

# Run database migrations
/usr/local/bin/php artisan migrate --force --no-interaction

# Run Apache webserver
apache2-foreground
