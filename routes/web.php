<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/shop-detail', function () {
    return view('shop-detail');
});

// Admin Route

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/data_produk', [App\Http\Controllers\AdminController::class, 'TampilanData'])->name('data');
Route::get('/data_produk/detail_data/{id}', [App\Http\Controllers\AdminController::class, 'detail'])->name('detail');

// Insert
Route::get('/tambah_data', [App\Http\Controllers\AdminController::class, 'tambah'])->name('tambah');
Route::post('/tambah_data', [App\Http\Controllers\AdminController::class, 'tambahStore'])->name('tambahpost');

// Update
Route::get('/data_produk/edit/{id}', [App\Http\Controllers\AdminController::class, 'edit'])->name('edit');
Route::post('/data_produk/edit_proses/{id}', [App\Http\Controllers\AdminController::class, 'editStore'])->name('editpost');

// Delete
Route::get('/delete/{id}', [App\Http\Controllers\AdminController::class, 'delete'])->name('delete');

// Harus Pake Controller ya ges ya
Route::get('/',[App\Http\Controllers\HomepageController::class, 'index'])->name('home');
Route::get('/shop',[App\Http\Controllers\ShopController::class, 'index'])->name('shop');
Route::get('/shop/detail/{id}',[App\Http\Controllers\ShopController::class, 'detail'])->name('detail');




// Auth
Route::get('/masuk', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/masuk', [App\Http\Controllers\AuthController::class, 'loginStore'])->name('loginpost');
Route::get('/daftar', [App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::post('/daftar', [App\Http\Controllers\AuthController::class, 'registerStore'])->name('registerpost');
Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

// profile
Route::get('/profil', [AdminController::class, 'profile'])->name('profile');

