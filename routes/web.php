<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home/index');
});

Route::get('/culture', function () {
    return view('culture/culture');
});

Route::get('/culture/culture-list', function () {
    return view('culture/culture_list/culture_list');
});

Route::get('/culture/culture-list/culture-detail', function () {
    return view('culture/culture_list/culture_detail/culture_detail');
});

Route::get('/profil', function () {
    return view('profil/profil');
});

Route::get('/contact', function () {
    return view('contact/contact');
});

Route::get('/dashboard', function () {
    return view('admin/dashboard');
});

// Route::get('/post', function () {
//     return view('admin/post');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/kategori',KategoriController::class);
Route::resource('/post',PostController::class);
Route::resource('/tag',TagController::class);
