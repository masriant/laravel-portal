<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/home', function () {
//     $nama = 'Masrianto';
//     return view('home', ['nama' => $nama]);
// });
// Route::get('/mahasiswa', function () {
//     $judul = 'Mahasiswa';
//     return view('mahasiswa', ['judul' => $judul]);
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });
// Route::get('/profile', function () {
//     return view('profile');
// });


// Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');
Route::get('/about', [PagesController::class, 'about']);



Route::get('/mahasiswa', 'MahasiswaController@index');