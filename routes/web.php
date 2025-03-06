<?php


require_once __DIR__ . '../../helpers/functions.php';
require_once __DIR__ . '../../config/Router.php';
require_once __DIR__ . '../../controllers/ProductController.php';
require_once __DIR__ . '../../controllers/UserController.php';


require_once __DIR__ . '../../controllers/ContactUsController.php';

require_once __DIR__ . '../../controllers/AboutUsController.php';

require_once __DIR__ . '../../controllers/AdminCreateAdminView.php';

require_once __DIR__ . '../../controllers/AdminCreateCategoryView.php';

require_once __DIR__ . '../../controllers/AdminCreateProductView.php';

require_once __DIR__ . '../../controllers/AdminCreateUserView.php';

require_once __DIR__ . '../../controllers/AdminEditAdminView.php';

require_once __DIR__ . '../../controllers/AdminEditCategoryView.php';

require_once __DIR__ . '../../controllers/AdminEditProductView.php';

require_once __DIR__ . '../../controllers/AdminIndexOrderView.php';

require_once __DIR__ . '../../controllers/AdminEditUserView.php';

require_once __DIR__ . '../../controllers/AdminIndexCategoryView.php';

require_once __DIR__ . '../../controllers/AdminIndexOrderView.php';

require_once __DIR__ . '../../controllers/AdminIndexProductView.php';

require_once __DIR__ . '../../controllers/AdminIndexUserView.php';

require_once __DIR__ . '../../controllers/AdminShowAdminView.php';

require_once __DIR__ . '../../controllers/AdminShowCategoryView.php';

require_once __DIR__ . '../../controllers/AdminShowProductView.php';

require_once __DIR__ . '../../controllers/AdminShowUserView.php';

require_once __DIR__ . '../../controllers/AdminSingInController.php';

require_once __DIR__ . '../../controllers/BlogController.php';

require_once __DIR__ . '../../controllers/CheckOutController.php';

require_once __DIR__ . '../../controllers/ContactUsController.php';

require_once __DIR__ . '../../controllers/HomeController.php';

require_once __DIR__ . '../../controllers/NotFoundController.php';

require_once __DIR__ . '../../controllers/PriceController.php';

require_once __DIR__ . '../../controllers/ServiceController.php';

require_once __DIR__ . '../../controllers/ShopingController.php';

require_once __DIR__ . '../../controllers/ShowCartController.php';

require_once __DIR__ . '/../controllers/sign_inController.php';

require_once __DIR__ . '/../controllers/sign_upController.php';



$router = new Router();



//users routes
$router->get('admin/login', 'AdminController@login', 'admin.login');
$router->post('admin/login', 'AdminController@authenticate', 'admin.authenticate');


$router->get('/users', 'UserController@index', 'user.list');

$router->get('/users/create', 'UserController@create', 'user.create');
$router->post('/users/create', 'UserController@store', 'user.store');

$router->get('/users/{id}/edit', 'UserController@edit', 'user.edit');
$router->put('/users/{id}/edit', 'UserController@update', 'user.update');

$router->delete('/users/{id}', 'UserController@destroy', 'user.destroy');
$router->get('/users/{id}', 'UserController@show', 'user.show');

//products routes
$router->get('/products', 'ProductController@index', 'product.index');

$router->get('/products/create', 'ProductController@create', 'product.create');
$router->post('/products/create', 'ProductController@store', 'product.store');

$router->get('/products/{id}/edit', 'ProductController@edit', 'product.edit');
$router->put('/products/{id}/edit', 'ProductController@update', 'product.update');

$router->delete('/products/{id}', 'ProductController@destroy', 'product.destroy');

$router->get('/products/{id}', 'ProductController@show', 'product.show');

$router->get('/contact','ContactUsController@index' , 'contact.index');


$router->dispatch();



////////////////////////////////////////////////////////////////////////////////////


$router->get('/contact','ContactUsController@index' , 'contact.index');

$router->get('/about','AboutUsController@index' , 'about.index');

$router->get('/adminadmin','AdminCreateAdminView@index' , 'adminadminindex');

$router->get('/admin_create_category','AdminCreateCategoryView@index' , 'admin_create_category.index');

$router->get('/admin_create_product','AdminCreateProductView@index' , 'admin_create_product.index');

$router->get('/admin_create_user','AdminCreateUserView@index' , 'admin_create_user.index');

$router->get('/admin_edit_admin','AdminEditAdminView@index' , 'admin_edit_admin.index');

$router->get('/admin_edit_category','AdminEditCategoryView@index' , 'admin_edit_category.index');

$router->get('/admin_edit_product','AdminEditProductView@index' , 'admin_edit_product.index');

$router->get('/admin_index_order','AdminIndexOrderView@index' , 'admin_index_order.index');

$router->get('/admin_edit_user','AdminEditUserView@index' , 'admin_edit_user.index');

$router->get('/admin_index_category','AdminIndexCategoryView@index' , 'admin_index_category.index');

$router->get('/admin_index_order','AdminIndexOrderView@index' , 'admin_index_order.index');

$router->get('/admin_index_product','AdminIndexProductView@index' , 'admin_index_product.index');

$router->get('/admin_index_user','AdminIndexUserView@index' , 'admin_index_user.index');

$router->get('/admin_show_admin','AdminShowAdminView@index' , 'admin_show_admin.index');

$router->get('/admin_show_category','AdminShowCategoryView@index' , 'admin_show_category.index');

$router->get('/admin_show_product','AdminShowProductView@index' , 'admin_show_product.index');

$router->get('/admin_show_user','AdminShowUserView@index' , 'admin_show_user.index');

$router->get('/admin_signin','AdminSingInController@index' , 'admin_signin.index');

$router->get('/blog','BlogController@index' , 'blog.index');

$router->get('/checkout','CheckOutController@index' , 'checkout.index');

$router->get('/contactus','ContactUsController@index' , 'contactus.index');

$router->get('/home','HomeController@index' , 'home.index');

$router->get('/error404','NotFoundController@index' , 'error404.index');

$router->get('/price','PriceController@index' , 'price.index');

$router->get('/service','ServiceController@index' , 'service.index');

$router->get('/shoping','ShopingController@index' , 'shoping.index');

$router->get('/showcart','ShowCartController@index' , 'showcart.index');

$router->get('/signin', 'SigninContr@index', 'signin.index');

$router->get('/signup', 'SignupContr@index', 'signup.index');