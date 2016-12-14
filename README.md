# phpM framework

This is the main repository of the phpM boilerplate application framework. It is a very slim project, that offers a solid boilerplate, that can be used for many simple, but also more complex web applications.

phpM was designed to be very unopinionated, lightweight and secure. It is also designed to be deployed easily in any environmnet as it tries to rely on as little operating system specific functionality and config-specific functionality as possible.

## Installation instructions
* `git clone https://github.com/Nualiian/phpM`
* `cd phpM`
* `composer install` to install the framework dependencies
* `mv .env.example .env` and fill out your credentials
* `bower install` to install the frontend dependencies
* `npm install` to install all the npm dependencies
* `gulp build` to build the resources
* ready to use!

phpM offers this functionality out of the box:

## Authentication
The framework has its own session based Auth class, that is ready to be used in your application. The main user model class is located in `framework/Core/Auth`.
To login a user you simply need to call `Auth::login($credentials)` in you controller. Logout on the toher hand is provided via `Auth::logout()`.
Auth class also offers a convenience method for retrieving the user from the session by calling `Auth::user()`. If there is no user loggd in `false` will be returned.
To create a new user, you can call `User::create($credentials)` and pass in an array of credentials (email and password) to persist a newly created user into the database.

## Database manipulation
phpM uses [NotORM](http://www.notorm.com/) as and active record manager for the database.

## Building resources
This boilerplate comes with a custom gulpfile that builds your resources, which are located in the `resources` folder. It uses Sass for stylesheets. phpM also comes preloaded with [MaterializeCSS](http://materializecss.com) framework.

## What to do when developing
* `gulp watch` to build resources as you go
* serve your webpage, e.g. `php -S localhost:3000 -t .`, or set up any other server using apache, nginx, ...
