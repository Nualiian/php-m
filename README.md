# phpM framework

This is the main repository of the phpM boilerplate application framework. It is a very slim project, that offers a solid boilerplate, that can be used for many simple, but also more complex web applications.

phpM was designed to be very unopinionated, lightweight and secure. It is also designed to be deployed easily in any environmnet as it tries to rely on as little operating system specific functionality and config-specific functionality as possible.

## Installation instructions
* `git clone https://github.com/Nualiian/phpM`
* `cd phpM`
* `composer install` to install the framework dependencies
* `bower install` to install the frontend dependencies
* `npm install` to install all the npm dependencies
* ready to use!

phpM offers this functionality out of the box:

## Authentication
The framework has its own session based Auth class, that is ready to be used in your application.

## Database manipulation
phpM uses [NotORM](http://www.notorm.com/) as and active record manager for the database.

## Building resources
This boilerplate comes with a custom gulpfile that builds your resources, which are located in the `resources` folder. It uses Sass for stylesheets. phpM also comes preloaded with [MaterializeCSS](http://materializecss.com) framework.

## What to do when developing
* `gulp watch` to build resources as you go
* serve your webpage, e.g. `php -S localhost:3000 -t .`, or set up any other server using apache, nginx, ...
