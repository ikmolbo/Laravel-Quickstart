#!/bin/bash

touch database/database.sqlite
cp .env.example .env
composer install
php artisan migrate
php artisan key:generate
npm install
gulp
