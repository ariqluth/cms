<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArticleController;




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

// default 
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//  Praktikum 3
Route::prefix('/')->group(function () {

 Route::get('/index', function () {
        return view('index');
});
    

Route::get('/about', function () {
    return view('about');
});

Route::get('/product', function () {
    return view('product');
});


Route::get('/news/{id}', function ($id) {
    return view('news' , ['id' => $id]);
});


Route::get('/program', function () {
    return view('program');
});



});


// Praktikum 2


// Route::get('/', [PageController::class, 'index'
// ]);

// Route::get('/about', [PageController::class, 'about'
// ]);

// Route::get('/articles/{id}', [PageController::class, 'articles'
// ]);





// Praktikum 1


// Route::get('/about', function () {
//     echo "Nama : Ariq Luthfi Rifqi <br>
//           Nim : 2141723002 <br>    
//           Kelas : Teknologi Informasi 2 G ";
// });

// Route::get('/users/{id}', function ($id) {
//     return "ID pengguna: ".$id;
// });


// Route::get('/articles/{id}', function ($id) {
//     echo "Ini adalah halaman
//     Artikel dengan ID: ".$id." ganti id sesuai dengan
//     input dari url 
//     ";
// });


// tugas 3 pertemuan 3 view 

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// pertemuan 4 

Route::prefix('/')->group(function () {

       
Route::get('/slider', [PageController:: class, 'tampilpasta']);

Route::get('/home', [PageController:: class, 'tampilpastaHome']);


Route::get('/map',  [PageController:: class, 'tampilpastaMap']);

Route::get('/menu',  [PageController:: class, 'tampilpastaMenu']);


Route::get('/contact',  [PageController:: class, 'tampilpastaContact']);


// Route::get('/login', [LoginController:: class, 'tampillogin']);


});

//pertemuan 5 
// route pada login dan daftar 

// pertemuan 9 buat articles 

// article eloquent
Route::resource('articles', ArticleController::class);

// print pdf 
Route::get('/articles/cetak_pdf', [ArticleController::class, 'cetak_pdf'])->name('cetak_pdf');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
