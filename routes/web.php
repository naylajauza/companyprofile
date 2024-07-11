<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\IsAdmin;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// // tes template
// Route::get('tes', function () {
//     return view('admin.index');

// });

// // route admin (backend)
// Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
//     Route::get('/', function(){
//         return view('admin.index');
//     });
//     // untuk route admin lainnya
// });

// ROUTE FRONTEND
// Route::get('/', [FrontController::class, 'index']);
Route::get('contact', [FrontController::class, 'contact']);
Route::get('shop', [FrontController::class, 'shop']);
Route::get('cart', [FrontController::class, 'cart']);
Route::get('checkout', [FrontController::class, 'checkout']);
Route::get('produktract', [FrontController::class, 'produktract']);
Route::get('about', [FrontController::class, 'about']);
Route::get('shopdetails', [FrontController::class, 'shopdetails']);

// Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
//     Route::get('/', function () {
//         return view('admin.index');
//     });
//     // untuk Route Backend Lainnya
//     Route::resource('user', App\Http\Controllers\UsersController::class);
//     // untuk Route Backend Lainnya
//     Route::resource('eskul', EskulController::class);

    // untuk Route Backend 
 Route::group(['prefix' => 'admin', 'middleware' => ['auth',isAdmin::class]], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    route::resource('users', App\Http\Controllers\UsersController::class);
    route::resource('kurikulum', App\Http\Controllers\KurikulumController::class);
    route::resource('fasilitas', App\Http\Controllers\FasilitasController::class);
    route::resource('eskul', App\Http\Controllers\EskulController::class);
    route::resource('artikel', App\Http\Controllers\ArtikelController::class);


    // route lain
    // Route::resource('user', App\Http\Controllers\UsersController::class);
    // Route::resource('eskul', App\Http\Controllers\EskulController::class);
    // Route::resource('fasilitas', App\Http\Controllers\FasilitasController::class);
    // Route::resource('kurikulum', App\Http\Controllers\KurikulumController::class);
    // Route::resource('artikel', App\Http\Controllers\ArtikelController::class);

});
Route::get('/', [FrontController::class, 'index']);
Route::get('kontak', [FrontController::class, 'kontak']);
Route::get('fasilitas', [FrontController::class, 'fasilitas']);
Route::get('kurikulum', [FrontController::class, 'kurikulum']);
Route::get('eskul', [FrontController::class, 'ekstrakurikuler']);
Route::get('profile', [FrontController::class, 'profile']);






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
