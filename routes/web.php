<?php

require_once 'controllers/HomeController.php';
require_once 'controllers/PageController.php';
require_once 'controllers/AuthController.php';
require_once 'controllers/ProductController.php';

$router = new Router();

$router->get('/', 'HomeController@index', 'home.index');
$router->get('/about', 'PageController@about', 'about');
$router->get('/contact', 'PageController@contact', 'contact');

// Update the /shoping route to use ProductController@index
$router->get('/shoping', 'ProductController@index', 'shoping.index');

// Users routes
$router->get('admin/login', 'AdminController@login', 'admin.login');
$router->post('admin/login', 'AdminController@authenticate', 'admin.authenticate');
$router->get('/users', 'UserController@index', 'user.list');
$router->get('/users/create', 'UserController@create', 'user.create');
$router->post('/users/create', 'UserController@store', 'user.store');
$router->get('/users/{id}/edit', 'UserController@edit', 'user.edit');
$router->put('/users/{id}/edit', 'UserController@update', 'user.update');
$router->delete('/users/{id}', 'UserController@destroy', 'user.destroy');
$router->get('/users/{id}', 'UserController@show', 'user.show');

// Products routes
$router->get('/products', 'ProductController@index', 'product.index');
$router->get('/products/create', 'ProductController@create', 'product.create');
$router->post('/products/create', 'ProductController@store', 'product.store');
$router->get('/products/{id}/edit', 'ProductController@edit', 'product.edit');
$router->put('/products/{id}/edit', 'ProductController@update', 'product.update');
$router->delete('/products/{id}', 'ProductController@destroy', 'product.destroy');
$router->get('/products/{id}', 'ProductController@show', 'product.show');

$router->get('/contact', 'ContactUsController@index', 'contact.index');

// Auth Controller
$router->get('/login', 'AuthController@index', 'signin');
$router->post('/login', 'AuthController@login', 'login');
$router->get('/signup', 'AuthController@singnup', 'signup');
$router->post('/signup', 'AuthController@register', 'register');

//categories products

$router->get('/shoping/category/{1}', 'ProductController@getByCategory', 'shoping.category');



// Dispatch the routes
$router->dispatch();
