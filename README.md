<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel 11 Project Setup

This document outlines the steps to install Laravel 11 and configure the `spatie/laravel-permission` package.

## Step 1: Install Laravel 11

First, we need to get a fresh Laravel 11 application. Open your terminal or command prompt and run the following command:

```bash
composer create-project laravel/laravel example-app
```
### Step 2: Install Spatie Laravel Permission Package

Now, we'll install the spatie/laravel-permission package for Access Control List (ACL) functionality. Also, we'll install the form collection package.

Run the following command to install the package:
```bash
composer require spatie/laravel-permission
```
Publishing the Configuration and Migrations
To customize the Spatie package, publish its configuration file and migration files. Run the following command:
```bash
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
```
This command will generate a permission.php configuration file in the config directory and a migration file in the database/migrations directory.
Running Migrations
Finally, run the migrations to create the necessary tables for roles and permissions:
```bash
php artisan migrate
```
This completes the installation and basic setup of Laravel 11 with the Spatie permission package.

### Spatie package provides its in-built middleware, which we can use simply and is displayed as below:
role permission So, we have to add middleware in the app.php file this way:

bootstrap/app.php
```bash
<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'role' => \Spatie\Permission\Middleware\RoleMiddleware::class,
            'permission' => \Spatie\Permission\Middleware\PermissionMiddleware::class,
            'role_or_permission' => \Spatie\Permission\Middleware\RoleOrPermissionMiddleware::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
```
### Step 3: Create Authentication

You have to follow a few steps to make auth in your Laravel 11 application.

First, you need to install the laravel/ui package as shown below:
```bash
composer require laravel/ui
```
Here, we need to generate auth scaffolding in Laravel 11 using Laravel UI command. So, let's generate it by the below command:
```bash
php artisan ui bootstrap --auth
```
Now you need to run the npm command; otherwise, you cannot see the better layout of the login and register page.
```bash
Install NPM:
npm install
Run NPM:
npm run build
```
Step 4: Create Routes
We need to add a number of routes for the users module, products module, and roles module. In these routes, I also use middleware with permissions for the roles and products routes, so add routes this way:
routes/web.php
```bash
<?php
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
   
Route::get('/', function () {
    return view('welcome');
});
  
Auth::routes();
  
Route::get('/home', [HomeController::class, 'index'])->name('home');
  
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});
```

### Env File
```bash
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:dt14hpalfrzmWLbAj9/aYhCIsng309KnGqFE7daXIfM=
APP_DEBUG=true
APP_TIMEZONE=UTC
APP_URL=http://localhost

APP_LOCALE=en
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=en_US

APP_MAINTENANCE_DRIVER=file
# APP_MAINTENANCE_STORE=database

BCRYPT_ROUNDS=12

LOG_CHANNEL=stack
LOG_STACK=single
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
 DB_HOST=127.0.0.1
 DB_PORT=3306
 DB_DATABASE=db_online_class
 DB_USERNAME=root
 DB_PASSWORD=

SESSION_DRIVER=database
SESSION_LIFETIME=120
SESSION_ENCRYPT=false
SESSION_PATH=/
SESSION_DOMAIN=null

BROADCAST_CONNECTION=log
FILESYSTEM_DISK=local
QUEUE_CONNECTION=database

CACHE_STORE=database
CACHE_PREFIX=

MEMCACHED_HOST=127.0.0.1

REDIS_CLIENT=phpredis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=log
MAIL_HOST=127.0.0.1
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

VITE_APP_NAME="${APP_NAME}"

```