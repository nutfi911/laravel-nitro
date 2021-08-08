<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/login', [HomeController::class, 'loginAttempt'])->name('loginAttempt');
Route::get('/welcome', [HomeController::class, 'loggedIn'])->name('loggedIn');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::post('/register', [HomeController::class, 'registerStore'])->name('registerStore');
Route::get('/list-all', [HomeController::class, 'listAll'])->name('listAll');
Route::get('/rent/{id}', [HomeController::class, 'rent'])->name('rent')->middleware('isuser');
Route::post('/rent/{id}', [HomeController::class, 'rentRequest'])->name('rent.request')->middleware('isuser');
Route::get('/customer', [HomeController::class, 'memberSettings'])->name('memberSettings')->middleware('isuser');
Route::get('/customer/edit', [HomeController::class, 'memberEdit'])->name('memberEdit')->middleware('isuser');
Route::post('/customer/edit', [HomeController::class, 'memberStore'])->name('memberStore')->middleware('isuser');
Route::get('/admin/login', [AdminController::class, 'login'])->name('backend.login');
Route::post('/admin/login', [AdminController::class, 'loginAttempt'])->name('backend.loginAttempt');

Route::group(['namespace' => 'backend', 'middleware' => 'islogin'], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('backend.index');
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('backend.logout');
    Route::get('/admin/carAdd', [AdminController::class, 'carAdd'])->name('backend.carAdd');
    Route::post('/admin/carAdd/store', [AdminController::class, 'carStore'])->name('backend.carStore');
    Route::get('/admin/carList', [AdminController::class, 'carList'])->name('backend.carList');
    Route::get('/admin/deletedCarList', [AdminController::class, 'deletedCarList'])->name('backend.deletedCarList');
    Route::get('/admin/carPassive/{id}', [AdminController::class, 'carPassive'])->name('backend.carPassive');
    Route::get('/admin/carActive/{id}', [AdminController::class, 'carActive'])->name('backend.carActive');
    Route::get('/admin/carEdit/{id?}', [AdminController::class, 'carEdit'])->name('backend.carEdit');
    Route::post('/admin/carEdit/{id?}', [AdminController::class, 'carUpdate'])->name('backend.carUpdate');
    Route::get('/admin/adminList', [AdminController::class, 'listAdmins'])->name('backend.adminList');
    Route::get('/admin/adminAdd/{id?}', [AdminController::class, 'addAdmin'])->name('backend.adminAdd');
    Route::post('/admin/adminAdd', [AdminController::class, 'adminStore'])->name('backend.adminStore');
    Route::post('/admin/adminUpdate', [AdminController::class, 'adminUpdate'])->name('backend.adminUpdate');
    Route::get('/admin/adminDelete/{id}', [AdminController::class, 'adminDelete'])->name('backend.adminDelete');
    Route::get('/admin/reservationConfirm/{id}', [AdminController::class, 'reservationOperation'])->name('backend.reservation');
    Route::get('/admin/reservations', [AdminController::class, 'reservationsPage'])->name('backend.reservation.page');
    Route::get('/admin/user/list', [AdminController::class, 'userList'])->name('backend.userlist.page');
    Route::get('/admin/user/{id}', [AdminController::class, 'userEdit'])->name('backend.useredit.page');
    Route::post('/admin/user/{id}', [AdminController::class, 'userUpdate'])->name('backend.userupdate');
});
