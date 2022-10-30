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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');

$routes->get('/', 'Login::index');

// ================================================================
//                              Dosen
// ================================================================
$routes->get('/indexDosen', 'Dosen::index');
$routes->get('/anggaranDosen', 'Dosen::anggaran');
$routes->get('/penelitianDosen', 'Dosen::penelitian');
$routes->get('/pkmDosen', 'Dosen::pkm');
$routes->get('/pkmjenisDosen', 'Dosen::pkmjenis');
$routes->get('/penelitianjenisDosen', 'Dosen::penelitianjenis');

$routes->get('/penelitianMandiri', 'Dosen::penelitianMandiri');
$routes->get('/penelitianKerjasama', 'Dosen::penelitianKerjasama');
$routes->get('/penelitianSemiMandiri', 'Dosen::penelitianSemiMandiri');
$routes->get('/penelitianDidanaiInstitusi', 'Dosen::penelitianDidanaiInstitusi');
$routes->get('/penelitianInstitusi', 'Dosen::penelitianInstitusi');

$routes->get('/pkmMandiri', 'Dosen::pkmMandiri');
$routes->get('/pkmKelompok', 'Dosen::pkmKelompok');
$routes->get('/pkmTerstruktur', 'Dosen::pkmTerstruktur');

$routes->get('/penelitianSemiMandiri1', 'Dosen::penelitianSemiMandiri1');
$routes->get('/penelitianSemiMandiri2', 'Dosen::penelitianSemiMandiri2');
$routes->get('/penelitianSemiMandiri3', 'Dosen::penelitianSemiMandiri3');
$routes->get('/penelitianSemiMandiri4', 'Dosen::penelitianSemiMandiri4');
$routes->get('/penelitianSemiMandiri5', 'Dosen::penelitianSemiMandiri5');

$routes->get('/penelitianDidanaiInstitusi1', 'Dosen::penelitianDidanaiInstitusi1');
$routes->get('/penelitianDidanaiInstitusi2', 'Dosen::penelitianDidanaiInstitusi2');
$routes->get('/penelitianDidanaiInstitusi3', 'Dosen::penelitianDidanaiInstitusi3');
$routes->get('/penelitianDidanaiInstitusi4', 'Dosen::penelitianDidanaiInstitusi4');
$routes->get('/penelitianDidanaiInstitusi5', 'Dosen::penelitianDidanaiInstitusi5');

$routes->get('/penelitianInstitusi1', 'Dosen::penelitianInstitusi1');
$routes->get('/penelitianInstitusi2', 'Dosen::penelitianInstitusi2');
$routes->get('/penelitianInstitusi3', 'Dosen::penelitianInstitusi3');
$routes->get('/penelitianInstitusi4', 'Dosen::penelitianInstitusi4');
$routes->get('/penelitianInstitusi5', 'Dosen::penelitianInstitusi5');

$routes->get('/pkmMandiri1', 'Dosen::pkmMandiri1');
$routes->get('/pkmMandiri2', 'Dosen::pkmMandiri2');
$routes->get('/pkmMandiri3', 'Dosen::pkmMandiri3');

$routes->get('/pkmTerstruktur1', 'Dosen::pkmTerstruktur1');
$routes->get('/pkmTerstruktur2', 'Dosen::pkmTerstruktur2');
$routes->get('/pkmTerstruktur3', 'Dosen::pkmTerstruktur3');

$routes->get('/pkmKelompok1', 'Dosen::pkmKelompok1');
$routes->get('/pkmKelompok2', 'Dosen::pkmKelompok2');
$routes->get('/pkmKelompok3', 'Dosen::pkmKelompok3');

$routes->get('/login', 'Login::index');
//routes create pengajuan
$routes->get('/penelitian/save', 'Penelitian::save');

// ================================================================
//                          Admin PPPM
// ================================================================
$routes->get('/indexAdmin', 'Admin::index');
$routes->get('/anggaranAdmin', 'Admin::anggaran');
$routes->get('/penelitianAdmin', 'Admin::penelitian');
$routes->get('/pkmAdmin', 'Admin::pkm');

$routes->get('/adminSemiMandiri1', 'Admin::adminSemiMandiri1');
$routes->get('/adminSemiMandiri2', 'Admin::adminSemiMandiri2');
$routes->get('/adminSemiMandiri3', 'Admin::adminSemiMandiri3');

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
