# laravel-crud-generator

[![Latest Stable Version](https://poser.pugx.org/kepex/laravel-crud-generator/v/stable)](https://packagist.org/packages/kepex/laravel-crud-generator) [![Total Downloads](https://poser.pugx.org/kepex/laravel-crud-generator/downloads)](https://packagist.org/packages/kepex/laravel-crud-generator) [![Latest Unstable Version](https://poser.pugx.org/kepex/laravel-crud-generator/v/unstable)](https://packagist.org/packages/kepex/laravel-crud-generator) [![License](https://poser.pugx.org/kepex/laravel-crud-generator/license)](https://packagist.org/packages/kepex/laravel-crud-generator)

php artisan command to generate fully working crud with grid paginated server side only by having database tables


### Installing
```
php composer.phar require kepex/laravel-crud-generator
```

Add to config/app.php the following line to the 'providers' array:
```
composer require devjpl/laravel-curd
```


### Usage

Use the desired model name as the input 


CRUD for employees table
```
php artisan make:crud employee
```
or the whole database
```
php artisan make:crud all
```

For more options 
```
php artisan help make:crud
```

