# laravel-crud-generator
```
Currently  Under Testing, Production Version Release Soon 
```
### Installing
```
composer require devjpl/laravel-curd
```

### Installing
```
composer require devjpl/laravel-curd
```

Add to config/app.php the following line to the 'providers' array:
```
CrudGenerator\CrudGeneratorServiceProvider::class,
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