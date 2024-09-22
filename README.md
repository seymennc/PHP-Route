# PHP Route Library

The PHP Route Library allows you to define HTTP-based routes quickly and flexibly. It is designed especially for use in MVC structures. It offers advanced features like flexible route definitions, middleware integration, and named routes.

## Badges

[![Latest Stable Version](https://poser.pugx.org/seymennc/php-route/v?style=for-the-badge)](https://packagist.org/packages/seymennc/asgard)

[![Total Downloads](https://poser.pugx.org/seymennc/php-route/downloads?style=for-the-badge)](https://packagist.org/packages/seymennc/asgard)

[![Latest Unstable Version](https://poser.pugx.org/seymennc/php-route/v/unstable?style=for-the-badge)](https://packagist.org/packages/seymennc/asgard)

[![License](https://poser.pugx.org/seymennc/php-route/license?style=for-the-badge)](https://packagist.org/packages/seymennc/asgard)

[![PHP Version Require](https://poser.pugx.org/seymennc/php-route/require/php?style=for-the-badge)](https://packagist.org/packages/seymennc/asgard)

[![Version](https://poser.pugx.org/seymennc/php-route/version?style=for-the-badge)](https://packagist.org/packages/seymennc/asgard)

## 🔗 Links
[![portfolio](https://img.shields.io/badge/my_portfolio-000?style=for-the-badge&logo=ko-fi&logoColor=white)](https://seymencayir.com.tr/)
[![linkedin](https://img.shields.io/badge/linkedin-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/seymennc)
[![twitter](https://img.shields.io/badge/twitter-1DA1F2?style=for-the-badge&logo=twitter&logoColor=white)](https://twitter.com/benseymenemen)


## Features
- **HTTP Method Support:** Supports HTTP requests like GET, POST, PUT, DELETE, and more.
- **Route Grouping:** Group similar routes to create a more organized and cleaner structure.
- **Prefix Support:** Add a prefix to all routes to create dynamic and organized route structures.
- **Middleware:** Define middleware for each route to control requests before or after processing.
- **Named Routes:** Name your routes to simplify dynamic URL generation.
- **Dynamic Route Patterns:** Build flexible structures with route parameters.

## Installation

To use the project, follow these steps:

### Git Clone
```bash
git clone https://github.com/seymennc/php-route.git
```
```bash
cd php-route
```
```bash
php -S 127.0.0.1:8080
```

### Composer
#### If you create new project with php-router
```bash
composer create-project seymennc/php-route php-route
```
```php
cd php-route
```
```php
php -S 127.0.0.1:8080
```

#### If you will only use it in your project
```php
composer require seymennc/php-route
```


## Usage

Include the autoloader in your project:
```bash
require 'vendor/autoload.php';
```
Then, include the web.php file in your project:
```bash
require __DIR__ . '/web/web.php';
```
Finally, add dispatch the routes:
```php
Route::dispatch();
```

### Basic Usage
You can define your routes in the web.php file.

This method defines a route that responds to GET requests to the /home URL. The function returns the string 'Home Page' when the route is accessed.
#### Basic GET Route
```php
use Luminance\Service\phproute\Route\Route;

Route::method('get')->route('/home', function() {
    return 'Home Page';
})->name('home');
```
###
#### Basic POST Route

In addition to the home URL, let's add a new route that responds to POST requests. When the route is accessed, the function returns the string 'Post Page'.
```php
Route::method('post')->route('/home', function() {
    return 'Home Post Page';
})->name('home');
```

###
#### With Controller
You can also define routes that respond to requests with a controller. In this example, the route responds to GET requests to the /about URL. When the route is accessed, the AboutController class's index method is called.
```php
Route::method('get')->route('/home', 'AboutController@index')->name('about');
```

###
#### With Middleware
You can define middleware for each route. In this example, the route responds to GET requests to the /contact URL. When the route is accessed, the function returns the string 'Contact Page'. The middleware function is called before the route is processed.
```php
Route::method('get')->route('/contact', function() {
    return 'Contact Page';
})->middleware('auth')->name('contact');
```
###
#### Route Grouping and Prefix
You can group similar routes to create a more organized and cleaner structure. In this example, the routes are grouped under the /admin prefix. The routes respond to GET requests to the /admin/dashboard and /admin/profile URLs.
```php
Route::prefix('/admin')->group(function() {
    Route::method('get')->route('/dashboard', 'AdminController@index');
    Route::method('post')->route('/profile', 'AdminController@profile');
});
```
More examples will be found in the [Asgard Docs](https://seymencayir.com.tr/asgard/docs/).

## Contributing
We welcome contributions! If you find a bug or have suggestions for improvements, please open an issue or contribute directly to the project.

## Our ♥️ Contributors
<a href="https://github.com/seymennc/PHP-Route/graphs/contributors">
  <img src="https://contrib.rocks/image?repo=seymennc/PHP-Route" />
</a>


## License
Licensed under the  GNU GENERAL PUBLIC LICENSE, Copyright © 2024-present BLC Studio
