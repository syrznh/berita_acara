<?php

namespace Config;

use App\Controllers\UsersController;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Auth::login');
$routes->get('testPass', 'Auth::testPass');
$routes->get('login', 'Auth::login', ["as" => "login"], ["filter" => "noauth"]);
$routes->get('logout', 'Auth::logout', ["as" => "logout"], ["filter" => "noauth"]);


$routes->group("home", ["filter" => "auth"], function ($routes) {
    $routes->get('/', 'DashboardController::index');
});

$routes->group("transaksi", ["filter" => "auth"], function ($routes) {
    $routes->get('/', 'TransaksiController::index');
});

//user
$routes->group("users", ["filter" => "auth"], function ($routes) {
    $routes->get('/', 'UsersController::index', ["as" => "usersIndex"]);
    $routes->get('create', 'UsersController::create', ["as" => "usersCreate"]);
    $routes->post('store', 'UserController::store', ["as" => "userStore"]);
    $routes->get('edit/(:num)', 'UserController::edit/$1', ["as" => "usersEdit"]);
    $routes->post('update/(:num)', 'UsersController::update/$1', ["as" => "usersUpdate"]);
    $routes->get('delete/(:num)', 'UserController::delete/$1', ["as" => "usersDelete"]);
});


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
