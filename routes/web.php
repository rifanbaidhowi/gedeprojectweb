<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

use App\Http\Controllers\landingController;
use App\Http\Controllers\kontakController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\cekhargaController;
use App\Http\Controllers\katalogController;
use App\Http\Controllers\cekpesananController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\stokController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\ownerController;
use App\Http\Controllers\desainerController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\kategoriController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [landingController::class, 'index']);

//landing
Route::get('/landing', [landingController::class, 'index'])->name('landing.landing');

//kontak
Route::get('/kontak', [kontakController::class, 'index'])->name('kontak');

//about
Route::get('/about', [aboutController::class, 'index']);

//cekharga
Route::get('/cek-harga', [cekhargaController::class, 'index']);

//katalog
Route::get('/katalog', [katalogController::class, 'index']);

//cek pesanan
Route::get('/cek-pesanan', [cekpesananController::class, 'index']);

//admin
Route::get('/admin', [adminController::class, 'index'])->middleware ('auth');
Route::post('/logout', [loginController::class, 'logout'])->name('logout');
Route::get('/login', [loginController::class, 'index'])->name('login')-> middleware('guest');
Route::post('/log', [loginController::class, 'login'])->name('login.store');
Route::get('/register', [registerController::class, 'index'])->name('register');
Route::post('/regist', [registerController::class, 'store'])->name('register.store');

//stok
Route::get('/data-stok', [stokController::class, 'index'])->name('admin.stok');
Route::get('/create-stok', [stokController::class, 'create'])->name('admin.createstok');
Route::post('stok', [stokController::class, 'store'])->name('stok.store');
Route::get('/edit/{id}', [stokController::class, 'edit'])->name('admin.editstok');
Route::put('/update/{id}', [stokController::class, 'update'])->name('admin.update');
Route::delete('/stoks/{stok}', [stokController::class, 'destroy'])->name('admin.destroystok');

//kategori
Route::get('/data-kategori', [kategoriController::class, 'index'])->name('admin.kategori');

//produk
Route::get('/data-produk', [produkController::class, 'index'])->name('admin.produk');
Route::get('/create-produk', [produkController::class, 'create'])->name('admin.createproduk');
Route::post('produk', [produkController::class, 'store'])->name('produk.store');
Route::get('/editproduk/{id}', [produkController::class, 'editproduk'])->name('admin.editproduk');
Route::put('/update/{id}', [produkController::class, 'updateproduk'])->name('admin.updateproduk');
Route::delete('/produks/{produk}', [produkController::class, 'destroy'])->name('admin.destroy');


//customer
Route::get('/data-customer', [customerController::class, 'index'])->name('admin.customer');
//owner
Route::get('/owner', [ownerController::class, 'index']);

//desainer
Route::get('/desainer', [desainerController::class, 'index']);
