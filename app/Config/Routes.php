<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//admin
$routes->group('', ['filter' => 'authcheck'], function ($routes) {
    $routes->get('/dashboard', 'Dashboard::index');
    $routes->get('/dashboard/menus', 'Dashboard::listMenu');
    $routes->get('/dashboard/activities', 'Dashboard::activity');
    $routes->get('/dashboard/galleries', 'Dashboard::listGallery');
    $routes->get('/dashboard/profile', 'Dashboard::profile');
    $routes->get('/dashboard/menu', 'Dashboard::formMenu');
    $routes->get('/dashboard/gallery', 'Dashboard::formGallery');
    $routes->get('dashboard/menu/(:segment)', 'Menu::edit/$1');
    $routes->get('dashboard/gallery/(:segment)', 'Gallery::edit/$1');
    $routes->get('/menu/search', 'Dashboard::searchMenu');
    //menu
    $routes->post('/menu/add', 'Menu::create');
    $routes->post('/menu/update', 'Menu::update');
    $routes->post('/menu/delete', 'Menu::delete');
    //user
    $routes->post('/user/delete', 'Auth::delete', ['filter' => 'rootcheck']);
    $routes->get('/dashboard/users', 'Dashboard::listUser', ['filter' => 'rootcheck']);
    //gallery
    $routes->post('/gallery/add', 'Gallery::create');
    $routes->post('/gallery/update', 'Gallery::update');
    $routes->post('/gallery/delete', 'Gallery::delete');
    // signup
    $routes->get('/auth/sign-up', 'Auth::signup');
    $routes->get('/auth/sign-out', 'Auth::signout');
    $routes->post('/auth/create', 'Auth::create');
    $routes->post('/auth/update', 'Auth::update');
    $routes->post('/auth/change-password', 'Auth::updatePassword');
    //setting
    $routes->post('/setting/update', 'Setting::update', ['filter' => 'rootcheck']);
    //experience
    $routes->post('/exp/add', 'Experience::create', ['filter' => 'rootcheck']);
    $routes->post('/exp/delete', 'Experience::delete', ['filter' => 'rootcheck']);
});

//auth
$routes->group('', ['filter' => 'guestcheck'], function ($routes) {
    $routes->get('/auth/sign-in', 'Auth::signin');
    $routes->get('/auth/forgot-password', 'Auth::forgotPassword');
    $routes->get('/auth/reset-password', 'Auth::resetPassword');
    $routes->post('/auth/reset-link', 'Auth::resetLink');
    $routes->post('/auth/reset', 'Auth::reset');
    $routes->post('/auth/login', 'Auth::login');
    //guest
    $routes->get('/', 'Home::index');
    $routes->get('/menus', 'Home::menu');
    $routes->get('/gallery', 'Home::gallery');
    $routes->get('/about', 'Home::about');
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
