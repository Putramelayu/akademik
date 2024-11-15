<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// Pengolahan data mahasiswa
$routes->get('/mahasiswa', 'Mahasiswa::index');
$routes->get('/mahasiswa/tambah', 'Mahasiswa::tambah');
$routes->post('/mahasiswa/simpan', 'Mahasiswa::simpan');
$routes->get('/mahasiswa/edit/(:num)', 'Mahasiswa::edit/$1');
$routes->post('/mahasiswa/update/(:num)', 'Mahasiswa::update/$1');
$routes->get('/mahasiswaedit/(:segment)/', 'Mahasiswa::EditMahasiswa/$1');
$routes->get('/mahasiswa/delete/(:num)', 'Mahasiswa::delete/$1');
$routes->get('/dashboard', 'Dashboard::index');

// Pengolahan data dosen
$routes->get('/dosen', 'Dosen::index');
$routes->get('/dosen/tambah', 'Dosen::tambah');
$routes->post('/dosen/simpan', 'Dosen::simpan');
$routes->get('/dosen/edit/(:num)', 'Dosen::edit/$1');
$routes->post('/dosen/update/(:num)', 'Dosen::update/$1');
$routes->get('/dosenedit/(:segment)/', 'Dosen::EditDosen/$1');
$routes->get('/dosen/delete/(:num)', 'Dosen::delete/$1');
$routes->get('/dashboard', 'Dashboard::index');

// Pengolahan data Laporan
$routes->get('/laporan', 'Laporan::index');
$routes->get('/laporan/tambah', 'Laporan::tambah');
$routes->post('/laporan/simpan', 'Laporan::simpan');
$routes->get('/laporan/edit/(:num)', 'Laporan::edit/$1');
$routes->post('/laporan/update/(:num)', 'Laporan::update/$1');
$routes->get('/laporanedit/(:segment)/', 'Laporan::EditLaporan/$1');
$routes->get('/laporan/delete/(:num)', 'Laporan::delete/$1');
$routes->get('/dashboard', 'Dashboard::index');