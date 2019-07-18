<?php

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
    return view('index');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('category', function () {
    return view('category');
});


Route::get('contact', function () {
    return view('contact');
});

Route::get('single', function () {
    return view('single');
});
Route::get('about', function () {
    return view('about');
});
Route::get('/admin', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin','middleware'=>['auth']],
function () {
    Route::get('/', function () {
        return view('welcome');
    });
    route::resource('kategori','kategoriController');
    route::resource('tag','TagController');
    route::resource('artikel','ArtikelController');
}
);


Route::resource('/admin/artikel','ArtikelController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
