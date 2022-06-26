<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

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
Route::post('/upload/foto/{id}', [UserController::class, 'upload_foto']);
Route::post('/upload/kyc/{id}', [UserController::class, 'upload_kyc']);
Route::get('/download/kyc/{id}', [UserController::class, 'download_kyc']);


Route::get('/peminjamanBuku', [HomeController::class, 'riwayat']);
Route::post('/pinjam/{id}', [HomeController::class, 'pinjam']);


// Disini route petugas dan admin
Route::group(['middleware' => 'admin'], function () {
    

    Route::get('/dashboard', [DataController::class, 'dashboard']);
    Route::get('/report', [DataController::class, 'report']);

    Route::get('/dataBuku', [DataController::class, 'index']);
    Route::get('/donasiBuku', [DataController::class, 'donasi']);
    Route::post('/donasiBuku', [DataController::class, 'store']);
    
    Route::post('/inputBuku', [DataController::class, 'store_buku']);
    Route::post('/editBuku/{id}', [DataController::class, 'update_buku']);
    

    Route::get('/pengurusPeminjamanBuku', [DataController::class, 'peminjaman']);
    Route::post('/input/peminjaman', [DataController::class, 'pinjam']);
    Route::post('/update/peminjaman/{id}', [DataController::class, 'update_pinjam']);

    Route::get('/pengembalianBuku', [DataController::class, 'pengembalian']);
    Route::post('/input/pengembalian', [DataController::class, 'input_pengembalian']);

    Route::get('/profil/admin', [DataController::class, 'profil']);
    Route::post('/updateProfilAdmin/{id}', [UserController::class, 'update_admin']);

    Route::get('/dataUser', [DataController::class, 'data_user']);

    Route::get('/dataRak',[DataController::class, 'data_rak']);
    Route::post('/dataRak/input',[DataController::class, 'input_rak']);
    Route::post('/dataRak/update/{id}',[DataController::class, 'update_rak']);
    Route::get('/dataRak/delete/{id}',[DataController::class, 'del_rak']);

    Route::get('/deleteBuku/{id}', [DataController::class, 'del_buku']);


});


Route::get('/profilKYC', function () {
    return view('profilKYC');
});

Route::get('/profilNew', function () {
    return view('profilNew');
});
Route::get('/inputBuku', function () {
    return view('inputBuku', [ 'judul' => 'Input Buku']);
});
Route::get('/profilAdmin', function () {
    return view('profilAdmin', [ 'title' => 'Profil']);
});


