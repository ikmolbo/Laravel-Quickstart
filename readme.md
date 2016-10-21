# Laravel 5.3 Quickstart

This repository aims to give a simple but quick start to prototyping a new application with Laravel. It currently uses Laravel 5.3.

### Getting Started

* I use [Valet](https://laravel.com/docs/5.3/valet). This means zero setup, and the site is ready to go immediately at `http://[project].dev`
* Create a SQLite database: `touch database/database.sqlite`
* Copy the `.env` file: `cp .env.example .env`
* Run `composer install` (or `php composer install`, `composer.phar install` etc, depending on your setup)
* Run `php artisan migrate` to set up the database.
* Run `npm install` then `gulp` to set up node modules and process CSS, JS, and copy files to `/public` folder.

### Database

* A SQLite database for getting up and running without fuss.
* Uncomment database settings in .env to switch to your MySQL database if required.

### Authentication

* User authentication scaffolding is already set up.
* Social login via oAuth and Laravel Socialite. Google, Facebook and Strava ready to go, just add credentials to `.env` file (or `config/services.php`). [More available](http://socialiteproviders.github.io).

### CSS and Javascript

* Run `gulp watch` to keep watching the resources folder for changes to the SASS and JS files.
* Bootstrap SASS is installed via npm (in `packages.json` file), and is processed by Gulp/Elixir.
* All styling should be done in the `resources/assets/sass/app.scss` and `resources/assets/sass/_variables.scss` files.

### Email

* Credentials must be added to `.env` or to `config/mail.php` so that password resets work.

### Development tools (require-dev only)

* [Adminer](https://www.adminer.org) database tool accessible through navbar link (`/adminer`). Logs in automatically to the active database when opened.
* [API testing tool](https://github.com/asvae/laravel-api-tester) through navbar link (`/api-tester`).
* [Tracy debugging tool](https://github.com/recca0120/laravel-tracy).
* [Log Viewer](https://github.com/rap2hpoutre/laravel-log-viewer)
* A page showing many useful components from the Bootstrap 3 framework at `/kitchen-sink`.

### More Laravel tools

Lists of useful Laravel packages are found [here](https://github.com/TimothyDJones/awesome-laravel) and [here](https://github.com/chiraggude/awesome-laravel).
