<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;

function route(RouteCollection &$routes, array $config = []): void
{
    $authRoutes = config('AuthRoutes')->routes;

    $routes->group('/', ['namespace' => 'App\Controllers'], static function (RouteCollection $routes) use ($authRoutes, $config): void {
        foreach ($authRoutes as $name => $row) {
            if (!isset($config['except']) || !in_array($name, $config['except'], true)) {
                foreach ($row as $params) {
                    $options = isset($params[3])
                        ? ['as' => $params[3]]
                        : null;
                    $routes->{$params[0]}($params[1], $params[2], $options);
                }
            }
        }
    });
}


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
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
$routes->get('/', 'Dashboard::index');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/profile', 'User::profile');

//route disposisi
// $routes->group('disposisi', ['filter' => 'isAuthorized'], function ($routes) {
$routes->group('disposisi', function ($routes) {
    $routes->get('tambah', 'Disposisi::tambah');
    $routes->get('daftar', 'Disposisi::daftar');
    $routes->get('proses/(:num)', 'Disposisi::proses/$1');
    $routes->get('edit/(:num)', 'Disposisi::edit/$1');
    $routes->get('delete/(:num)', 'Disposisi::delete/$1');
    $routes->get('undelete/(:num)', 'Disposisi::undelete/$1');
    $routes->get('laporan/(:num)', 'Disposisi::laporan/$1');
    $routes->get('laporan_approval/(:num)', 'Disposisi::laporan_approve/$1');
    $routes->get('laporan/edit/(:num)', 'Disposisi::edit_laporan/$1');
});
route($routes);

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
