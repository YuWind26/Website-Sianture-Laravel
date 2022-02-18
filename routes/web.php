<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CultureController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ArtikelController;
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

//  Route Home
Route::get('/', function () {
    return view('home/index');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route Culture

Route::get('/culture', [CultureController::class, 'index']);

Route::get('/culture/{slug}', [CultureController::class, 'kategori']);

Route::get('/culture/{k}/{d}', [CultureController::class, 'artikel']);

// Route Profil
Route::get('/profil', function () {
    return view('profil/profil');
});

// Route Contact
Route::get('/contact', function () {
    return view('contact/contact');
});

// // Route Auth
Route::group(['middleware' => ['auth']], function () {
    // Route Dashboard

    Route::get('/dashboard', [DashboardController::class, 'index']);

    // Route Kategori
    Route::resource(
        '/kategori',
        KategoriController::class
    );
    Route::get('/kategori/{id}/konfirmasi', [KategoriController::class, 'konfirmasi']);
    Route::get('/kategori/{id}/delete', [KategoriController::class, 'delete']);

    // Route Post
    Route::resource('/post', PostController::class);
    // Route::get('/post/create', [PostController::class, 'create']);
    // Route::get('/post/create', function () {
    //     return view('post/create');
    // });
    Route::get('/post/{id}/konfirmasi', [PostController::class, 'konfirmasi']);
    Route::get('/post/{id}/delete', [PostController::class, 'delete']);
});
Auth::routes();






// Route::resource('/tag',TagController::class);


// Route::get('/culture', function () {
//     return view('culture/culture');
// });

// Route::get('/culture/culture-list', function () {
//     return view('culture/culture_list/culture_list');
// });



// Route::get('/culture/culture-list',[ArtikelController::class,'index']);

// Route::get('/culture/culture-list',[ArtikelController::class,'kategori']);



// Route::get('/culture/culture-list/culture-detail', function () {
//     return view('culture/culture_list/culture_detail/culture_detail');
// });



// Route::get('/dashboard', function () {
//     return view('admin/dashboard');
// });

// Route::get('/post', function () {
//     return view('admin/post');
// });
