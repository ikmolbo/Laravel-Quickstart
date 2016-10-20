# Laravel 5.3 Quickstart

This repository comes set up to get started quickly with Laravel 5.3. It is set up to include:

### Getting Started

* I use [Valet](https://laravel.com/docs/5.3/valet). This means zero setup, and the site is ready to go immediately at `http://[project].dev`
* Run `composer install` or `php composer install`...
* Run `php artisan migrate` to set up the database.
* Run `npm install` then `gulp` to set up node modules and process CSS, JS, and copy files to `/public` folder.

### Database

* A SQLite database for getting up and running without fuss.

### Authentication

* User authentication scaffolding set up, and database tables created.
* Social login via oAuth and Laravel Socialite. Google, Facebook, Twitter and Strava ready to go, just add credentials to `.env` file (or `config/services.php`). [More available](http://socialiteproviders.github.io).

### CSS and Javascript

* Run `gulp watch` to keep watching the resources folder for changes to the SASS and JS files.
* Bootstrap SASS is installed via npm (in `packages.json` file), and is processed by Gulp/Elixir.
* All styling should be done in the `resources/assets/sass/app.scss` and `resources/assets/sass/_variables.scss` files.

### Development tools (require-dev only)

* [Adminer](https://www.adminer.org) database tool accessible through navbar link (`/adminer`). Logs in automatically to the active database when opened.
* [API testing tool](https://github.com/asvae/laravel-api-tester) through navbar link (`/api-tester`).
* [Tracy debugging tool](https://github.com/recca0120/laravel-tracy).
* [Log Viewer](https://github.com/rap2hpoutre/laravel-log-viewer)

### More Laravel tools

Lists of useful Laravel packages are found [here](https://github.com/TimothyDJones/awesome-laravel) and [here](https://github.com/chiraggude/awesome-laravel).
