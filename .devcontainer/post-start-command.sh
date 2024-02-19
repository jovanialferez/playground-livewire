#!/bin/bash

composer install --quiet --no-interaction --no-progress --no-suggest --optimize-autoloader

npm install --quiet --no-progress

php artisan migrate --quiet --no-interaction