<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//  $routes->setDefaultController('home');

// $routes->get('/', 'Admin\DashboardController::index');
$routes->get('/', 'Admin\HomeController::home');

$routes->setAutoRoute(true);
// MENUJU KE HOME WEBSITE KITA
$routes->get('home', 'Admin\UtamaController::utama');

// REGISTER
$routes->get('register', 'Admin\RegisterController::register');

// LOGIN
// $routes->get('login', 'Admin\RegisterController::login');
// $routes->get('login', 'Admin\RegisterController::login');
$routes->post('login', 'Admin\RegisterController::save_register');

// $routes->get('home', 'Admin\HomeController::home');

// MENUJU KE DESTINATION WEBSITE KITA
$routes->get('destination', 'Admin\DestinationController::desti');

// MENUJU KE BOOKING WEBSITE KITA
$routes->get('booking', 'Admin\BookingController::index');

// MENUJU KE DASHBOARD
$routes->get('dashboard', 'Admin\DashboardController::index');

// MENUJU KE DAFTAR PRODUK
$routes->get('daftar-produk', 'Admin\ProdukController::index');
$routes->get('daftar-produk/tambah', 'Admin\ProdukController::form_create');
$routes->post('daftar-produk/create-produk', 'Admin\ProdukController::create_produk');
$routes->put('daftar-produk/ubah/(:num)', 'Admin\ProdukController::form_update/$1');
$routes->delete('daftar-produk/delete-produk/(:num)', 'Admin\ProdukController::delete_produk/$1');

// DAFTAR PRODUK 1
$routes->get('daftar-produk1', 'Admin\Produk::index1');
$routes->get('daftar-produk/tambah1', 'Admin\Produk::form_create1');
$routes->post('daftar-produk1/create-produk1', 'Admin\Produk::create_produk1');


$routes->get('daftar-produk2', 'Admin\Kategori2::index2');
$routes->get('daftar-produk/tambah2', 'Admin\Kategori2::form_create2');
$routes->get('daftar-produk/tambah3', 'Admin\Produk3Controller::form_create3');

$routes->post('daftar-produk2/create-produk2', 'Admin\Kategori2::create_produk2');
$routes->post('daftar-produk3/create-produk3', 'Admin\Produk3Controller::create_produk3');
$routes->get('daftar-produk3', 'Admin\Produk3Controller::index3');
$routes->get('daftar-produk/tambah1', 'Admin\Produk3Controller::form_create3');


// MENUJU KE DAFTAR KATEGORI
$routes->get('daftar-kategori', 'Admin\ProdukController::kategori');
$routes->get('daftar-kategori1', 'Admin\Produk::kategori1');
$routes->get('daftar-kategori2', 'Admin\Kategori2::kategori2');
$routes->get('daftar-kategori3', 'Admin\Kategori3Controller::kategori3');



// MENUJU KE DAFTAR KATEGORI TAMBAH
$routes->post('daftar-kategori/tambah', 'Admin\ProdukController::store');
$routes->post('daftar-kategori1/tambah1', 'Admin\Produk::store1');
$routes->post('daftar-kategori2/tambah2', 'Admin\Kategori2::store2');
$routes->post('daftar-kategori3/tambah3', 'Admin\Kategori3Controller::store3');



// MENUJU KE DAFTAR KATEGORI UBAH
$routes->put('daftar-kategori/ubah/(:num)', 'Admin\ProdukController::update/$1');

// MENUJU KE DAFTATR KATEGORI HAPUS
$routes->delete('daftar-kategori/hapus/(:num)', 'Admin\ProdukController::destroy/$1');
$routes->delete('daftar-kategori/hapus1/(:num)', 'Admin\ProdukController::destroy1/$1');

$routes->delete('daftar-kategori/hapus2/(:num)', 'Admin\Produk::destroy2/$1');
$routes->delete('daftar-kategori/hapus3/(:num)', 'Admin\Produk::destroy3/$1');

$routes->delete('daftar-kategori/hapus4/(:num)', 'Admin\Kategori2::destroy4/$1');
$routes->delete('daftar-kategori/hapus5/(:num)', 'Admin\Kategori2::destroy5/$1');
$routes->delete('daftar-kategori/hapus6/(:num)', 'Admin\Kategori3Controller::destroy6/$1');
$routes->delete('daftar-kategori/hapus7/(:num)', 'Admin\Kategori3Controller::destroy7/$1');
