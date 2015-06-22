#!/usr/bin/env bash

cd /vagrant

composer install

bower install

php artisan migrate --env=local
php artisan migrate --package=cartalyst/sentry
php artisan syntara:install --env=local
php artisan db:seed --env=local
php artisan asset:publish frozennode/administrator --env=local
php artisan create:user filmoteca filmoteca@unam.mx filmoteca Admin --env=local