<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Install Project

clone the project from github or download .zip `git clone https://github.com/OlegMarko/laravel-realtime-app.git`

go to project root directory `cd laravel-realtime-app`

run command `composer install`

make `.env` file like to `.env.example`

run command `php artisan key:generate`

set to `.env` file DB and BROADCAST_DRIVER config

run command `npm i`

if you update js files: 
you need run command `npm run prod` or `np run watch`

run command `node server.js`

run command `php artisan serve`

## Test Routes

[App](http://127.0.0.1:8000)

[RealTime App](http://127.0.0.1:8000/start)

## Requirements

- php 7.*

- composer

- sqlite

- nodejs

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
