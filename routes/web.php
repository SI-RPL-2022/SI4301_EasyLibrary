<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Session;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/katalogBuku', [HomeController::class, 'katalog'] );
Route::get('/lihatDetail/{id}', [HomeController::class, 'detail']);
Route::get('/register', function () {
    return view('register');
})->middleware('guest');
Route::post('/register', [UserController::class, 'register'])->middleware('guest');

Route::get('/login', [UserController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [UserController::class, 'authenticate']);

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/profil', [UserController::class, 'show'])->middleware('auth');
Route::post('/updateProfil/{id}', [UserController::class, 'update']);


Route::get('/peminjamanBuku', [HomeController::class, 'riwayat']);
Route::post('/pinjam/{id}', [HomeController::class, 'pinjam']);


// Disini route petugas dan admin
Route::group(['middleware' => 'admin'], function () {
    
    Route::get('/dataBuku', [DataController::class, 'index']);
    Route::get('/donasiBuku', [DataController::class, 'donasi']);
    Route::post('/donasiBuku', [DataController::class, 'store']);
    Route::get('/pengurusPeminjamanBuku', [DataController::class, 'peminjaman']);
    Route::get('/pengembalianBuku', [DataController::class, 'pengembalian']);

});


Route::get('/profilKYC', function () {
    return view('profilKYC');
});

Route::get('/profilNew', function () {
    return view('profilNew');
});
Route::get('/inputBuku', function () {
    return view('inputBuku', [ 'title' => 'Input Buku']);
});
Route::get('/profilAdmin', function () {
    return view('profilAdmin', [ 'title' => 'Profil']);
});


