#!/bin/bash

# Arreglar permisos de storage y bootstrap/cache
chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Crear directorios si no existen
mkdir -p /var/www/storage/logs
mkdir -p /var/www/storage/framework/cache/data
mkdir -p /var/www/storage/framework/sessions
mkdir -p /var/www/storage/framework/views
mkdir -p /var/www/storage/app/public

# Asegurar permisos correctos
chmod -R 775 /var/www/storage
chmod -R 775 /var/www/bootstrap/cache

# Iniciar PHP-FPM
php-fpm -D

# Iniciar Nginx
nginx -g 'daemon off;'