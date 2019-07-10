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
Route::get('/about', function () {
    return view('about');
});
Route::get('/admin', function () {
    return view('welcome');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/single', function () {
    return view('single');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/siswa', function () {
    return view('siswa');
});
Route::get('/backend/artikel', function () {
    return view('backend/artikel/index');
});
Route::get('/backend/tag', function () {
    return view('backend/tag/index');
});
Route::get('/backend/kategori', function () {
    return view('backend/kategori/index');
});
Route::get('/siswa', function () {
    return view('siswa');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('artikel', 'ArtikelController');
Route::resource('tag', 'TagController');
Route::resource('kategori', 'KategoriController');
