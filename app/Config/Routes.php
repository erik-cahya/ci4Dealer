<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');

// My Routes
// $routes->get('/', 'Auth::redirect');
$routes->get('/login', 'Auth::index');
$routes->post('/login', 'Auth::login');
$routes->get('/logout', 'Auth::logout');
$routes->get('/register', 'Auth::register');
$routes->post('/auth/saveAccount', 'Auth::saveAccount');

$routes->get('/', 'LandingPages::dashboard');
$routes->get('/product/detail/(:num)', 'Product::detailProduct/$1');
$routes->get('/product', 'Product::index');
$routes->post('/product/order/(:segment)', 'Product::order/$1');





// Admin Login Panel
// routes kendaraan
$routes->get('/admin/(:segment)', 'AdminPanel::$1',);
$routes->get('/admin/editUser/(:segment)', 'AdminPanel::editUser/$1',);
$routes->get('/admin/editKendaraan/(:segment)', 'AdminPanel::editKendaraan/$1',);
$routes->post('/product/saveKendaraan', 'AdminPanel::saveKendaraan');
$routes->delete('/admin/(:num)', 'AdminPanel::delete/$1');
$routes->delete('/admin/deleteKendaraan/(:num)', 'AdminPanel::deleteKendaraan/$1');
// route user
$routes->post('/admin/updateUser/(:num)', 'AdminPanel::updateUser/$1');
$routes->post('/admin/updateKendaraan/(:num)', 'AdminPanel::updateKendaraan/$1');
$routes->post('/admin/updateAccount/(:num)', 'AdminPanel::updateAccount/$1');





// User Login Panel
$routes->get('/user', 'UserPanel::index');
$routes->get('/user/(:segment)', 'UserPanel::$1');




/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
