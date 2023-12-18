<?php

/*
   |--------------------------------------------------------------------------
   | Web Routes
   |--------------------------------------------------------------------------
   |
   | Here is where you can register web routes for your application. These
   | routes are loaded by the Router class 
   |
   */

// global routes
$router->get('/^$/', ['GlobalController@landing']);


$router->get('/^auth\/login$/', ['AuthController@loginPage']);
$router->post('/^auth\/login$/', ['AuthController@login']);

$router->get('/^admin\/dashboard$/', ['AdminController@dashboardPage']);
//anggota routes
$router->get('/^anggota\/dashboard$/', ['AnggotaController@dashboardPage']);
$router->get('/^anggota\/katalogBuku$/', ['KelolaBukuController@katalogBukuPage']);
$router->get('/^anggota\/profile$/', ['AnggotaController@profilePage']);
$router->get('/^anggota\/history$/', ['AnggotaController@history']);


$router->get('/^buku\/searchBook$/', ['BookController@searchBook']);
$router->get('/^auth\/logout$/', ['AuthController@logout']);

//admin routes
$router->get('/^admin\/kelola\/anggota$/', ['KelolaAnggotaController@kelolaAnggota']);
$router->get('/^admin\/kelola\/buku$/', ['KelolaBukuController@kelolaBukuPage']);
$router->get('/^admin\/user\/addUser$/', ['UserController@addUserPage']);
$router->post('/^admin\/user\/addUser$/', ['UserController@addUser']);
$router->get('/^admin\/kelola\/addBook$/', ['KelolaBukuController@addBookPage']);
$router->post('/^admin\/kelola\/addBook$/', ['KelolaBukuController@addBook']);

//cart routes
$router->post('/^anggota\/cart\/addToDetailCart$/', ['CartController@addToDetailCart']);
$router->get('/^anggota\/cart\/detailCart$/', ['CartController@detailCartPage']);
$router->post('/^anggota\/cart\/deleteCartDetail$/', ['CartController@deleteItem']);
$router->post('/^anggota\/cart\/submitCart$/', ['CartController@submitCart']);

//kelola peminjaman routes
$router->get('/^admin\/kelola\/daftarRequest$/', ['KelolaPeminjamanController@requestPeminjamanPage']);
$router->get('/^admin\/kelola\/daftarPeminjaman$/', ['KelolaPeminjamanController@daftarPeminjamanPage']);
$router->post('/^admin\/kelola\/detailPeminjaman$/', ['KelolaPeminjamanController@peminjamanDetail']);
$router->post('/^admin\/kelola\/konfirmasiRequest$/', ['KelolaPeminjamanController@konfirmasiRequest']);
$router->post('/^admin\/kelola\/konfirmasiPengembalian$/', ['KelolaPeminjamanController@konfirmasiPengembalian']);

// $router->get('/^$/', ['GlobalController@landing']);
// $router->get('/^contact$/', ['GlobalController@contact']);
// $router->get('/^about$/', ['GlobalController@about']);
// $router->get('/^test\/(\d+)\/(\d+)$/', ['GlobalController@test']);

// // auth routes
// $router->get('/^auth\/login$/', ['AuthMiddleware@shouldAnonymous', 'AuthsController@loginForm']);
// $router->post('/^auth\/login$/', ['AuthMiddleware@shouldAnonymous', 'AuthsController@login']);
// $router->get('/^auth\/update-password\/(\w{32})$/', ['AuthMiddleware@shouldAnonymous', 'AuthsController@updatePasswordView']);
// $router->post('/^auth\/update-password$/', ['AuthMiddleware@shouldAnonymous', 'AuthsController@updatePassword']);
// $router->get('/^auth\/forgot-password$/', ['AuthMiddleware@shouldAnonymous', 'AuthsController@forgotPasswordView']);
// $router->post('/^auth\/forgot-password$/', ['AuthMiddleware@shouldAnonymous', 'AuthsController@forgotPassword']);
// $router->get('/^auth\/logout$/', ['AuthMiddleware@shouldValidated', 'AuthsController@logout']);

// // admin routes
// $router->get('/^admin\/dashboard$/', ['AuthMiddleware@shouldValidated', 'AdminController@dashboard']);
// $router->get('/^admin\/report$/', ['AuthMiddleware@shouldValidated', 'AdminController@report']);
// $router->get('/^admin\/notification$/', ['AuthMiddleware@shouldValidated', 'AdminController@notification']);
// $router->get('/^admin\/profile$/', ['AuthMiddleware@shouldValidated', 'AdminController@profilePage']);
// $router->post('/^admin\/update-profile$/', ['AuthMiddleware@shouldValidated', 'AdminController@updateProfile']);
// $router->post('/^admin\/update-password$/', ['AuthMiddleware@shouldValidated', 'AdminController@updatePassword']);

// // manage student routes
// $router->get('/^admin\/manage\/student$/', ['AuthMiddleware@shouldValidated', 'AdminController@manageStudent']);

// // manage lecture routes
// $router->get('/^admin\/manage\/lecture$/', ['AuthMiddleware@shouldValidated', 'AdminController@manageLecture']);

// // manage admin routes
// $router->get('/^admin\/manage\/admin$/', ['AuthMiddleware@shouldValidated', 'ManageAdminController@manageAdminPage']);
// $router->post('/^admin\/manage\/admin\/new$/', ['AuthMiddleware@shouldValidated', 'ManageAdminController@addNewAdmin']);
// $router->post('/^admin\/manage\/admin\/update$/', ['AuthMiddleware@shouldValidated', 'ManageAdminController@updateAdmin']);

// // manage violation level routes
// $router->get('/^admin\/manage\/violation-level$/', ['AuthMiddleware@shouldValidated', 'ManageViolationLevelController@manageViolationLevelPage']);
// $router->post('/^admin\/manage\/violation-level\/new$/', ['AuthMiddleware@shouldValidated', 'ManageViolationLevelController@addViolationLevel']);
// $router->post('/^admin\/manage\/violation-level\/update$/', ['AuthMiddleware@shouldValidated', 'ManageViolationLevelController@updateViolationLevel']);

// // manage code of conduct routes
// $router->get('/^admin\/manage\/code-of-conduct$/', ['AuthMiddleware@shouldValidated', 'ManageCodeOfConductController@manageCodeOfConductPage']);
// $router->post('/^admin\/manage\/code-of-conduct\/new$/', ['AuthMiddleware@shouldValidated', 'ManageCodeOfConductController@addCodeOfConduct']);