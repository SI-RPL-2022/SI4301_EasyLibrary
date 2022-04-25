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

Route::get('/landingPage', function () {
    return view('landingPage');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/lihatDetail', function () {
    return view('lihatDetail');
});
Route::get('/peminjamanBuku', function () {
    return view('peminjamanBuku');
});
Route::get('/profilKYC', function () {
    return view('profilKYC');
});
Route::get('/pengurusPeminjamanBuku', function () {
    return view('pengurusPeminjamanBuku');
});
Route::get('/profilAdmin', function () {
    return view('profilAdmin');
});
Route::get('/inputBuku', function () {
    return view('inputBuku', [ 'title' => 'Input Buku']);
});
Route::get('/pengembalianBuku', function () {
    return view('pengembalianBuku', [ 'title' => 'Pengembalian Buku']);
});
Route::get('/profilAdmin', function () {
    return view('profilAdmin', [ 'title' => 'Profil']);
});
Route::get('/donasiBuku', function () {
    return view('donasiBuku', [ 'title' => 'Donasi Buku']);
});
Route::get('/dataBuku', function () {
    return view('dataBuku', [ 'title' => 'Data Buku']);
});