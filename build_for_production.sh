#!/bin/bashrm
# shellcheck disable=SC2164
cd application
mv .env.production .env
composer install --optimize-autoloader --no-dev
php artisan optimize:clear
php artisan config:cache
php artisan event:cache
php artisan route:cache
php artisan view:cache