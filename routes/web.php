<?php

use App\Http\Controllers\RiwayatTransaksiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/login',[LoginController::class, 'index'])->name('login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::get('/admin', [MenuController::class, 'index'])->name('menu.index');

Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])
    ->name('custom.password.request');

// Rute untuk mengirim email reset kata sandi
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])
    ->name('custom.password.email');

// Rute untuk menampilkan formulir reset kata sandi
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])
    ->name('custom.password.reset');

// Rute untuk proses reset kata sandi
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])
    ->name('custom.password.update');

//route admin
Route::get('/data_menu', [MenuController::class, 'index'])->name('data_menu');
Route::get('/tambah_data_menu', [MenuController::class,'create'])->name('tambah_data_menu');
Route::post('/tambah_data_menu', [MenuController::class,'store'])->name('tambah_data_menu');
Route::get('/edit_data_menu/{id}', [MenuController::class,'edit'])->name('edit_data_menu');
Route::post('/update_data_menu/{id}', [MenuController::class,'update']);
Route::delete('/hapus_data_menu/{id}', [MenuController::class,'destroy'])->name('hapus_data_menu');
// Route::get('/admin',[MenuController::class,'index'])->name('admin');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/cetak', [MenuController::class, 'cetakMenu'])->name('cetak_menu');

//route pricelist
Route::get('price', function() {
    return view('landing_page.price');
});

Route::get('service', function() {
    return view('landing_page.service');
});

Route::get('contact', function() {
    return view('landing_page.contact');
});

//route ke dashboard admin
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route::get('/book', [BookingController::class, 'index'])->name('booking');
Route::get('/booking', [BookingController::class, 'index'])->name('booking');;
// Route::post('/tambah_data_menu', [MenuController::class,'store'])->name('tambah_data_menu');

//route ke data customer
Route::get('/customer', [CustomerController::class, 'index'])->name('customer');

//route ke transaksi
Route::get('/transaksi/{id}', [TransaksiController::class, 'index'])->name('transaksi');
Route::get('/get_harga', [TransaksiController::class, 'getHarga']);
// Route::post('/bayar_transaksi', [TransaksiController::class, 'bayar'])->name('bayarTransaksi');
Route::get('/riwayat_transaksi', [RiwayatTransaksiController::class, 'index'])->name('riwayat_transaksi');
Route::get('/coba', [TransaksiController::class, 'coba']);

// Route untuk menangani aksi bayarTransaksi
Route::post('/bayar_transaksi', [TransaksiController::class, 'bayarTransaksi'])->name('bayarTransaksi');

// Route untuk halaman riwayatTransaksi
Route::get('/riwayat_transaksi', [TransaksiController::class, 'riwayatTransaksi'])->name('riwayatTransaksi');
// Route::get('/transaksi/{id}', [TransaksiController::class, 'show'])->name('transaksi.show');
// Route::get('/riwayat_transaksi_detail', [TransaksiController::class, 'show'])->name('showDetail');