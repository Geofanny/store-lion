<?php

use App\Http\Controllers\Cobacontroller;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminProductController;
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

Route::get('/', [Cobacontroller::class,'bebas']);

// Keranjang
Route::get('/cart/tambah/{id}',[Cobacontroller::class,'do_tambah_cart'] )->where("id","[0-9]+");
Route::get('/cart/hapus/{id}',[Cobacontroller::class,'do_hapus_cart'] )->where("id","[0-9]+");
Route::get('/cart', [Cobacontroller::class,'cart']);

Route::get('/more-products/{id_kategori}', [Cobacontroller::class,'moreProducts']);

Route::get('/transaksi/tambah', [Cobacontroller::class,'do_tambah_transaksi']);

// Route::get('/form', [Cobacontroller::class,'form']);
// End keranjang

Route::get('/baru', function () {
	return view('percobaan.baru');
});

// barang
Route::get('/keranjang', function () {
	return view('user/keranjang');
});
Route::get('/data_history', function () {
	return view('user/cart_history');
});
Route::get('/checkout', function () {
	return view('user/checkout');
});
Route::get('/clothing', function () {
	return view('barang.clothing');
});
Route::get('/electronic', function () {
	return view('barang.electronic');
});
Route::get('/cincin', function () {
	return view('barang.cincin');
});
Route::get('/garden', function () {
	return view('barang.garden');
});
Route::get('/jam', function () {
	return view('barang.jam');
});
Route::get('/kids', function () {
	return view('barang.kids');
});
Route::get('/makeup', function () {
	return view('barang.makeup');
});
Route::get('/shoes', function () {
	return view('barang.shoes');
});
Route::get('/sport', function () {
	return view('barang.sport');
});

// Dashboard
Route::get('/bor', function () {
	return view('bor.index');
});
Route::get('/his', function () {
	return view('bor.history');
});
Route::get('/order', function () {
	return view('bor.order');
});
Route::get('/lapor', function () {
	return view('bor.tables');
});
Route::get('/user', function () {
	return view('bor.user');
});

// produt admin
Route::get('/baju', function () {
	return view('bor.data_produk.clothing_admin');
});
Route::get('/perhiasan', function () {
	return view('bor.data_produk.cincin_admin');
});
Route::get('/elektronik', function () {
	return view('bor.data_produk.electronic_admin');
});
Route::get('/rumah', function () {
	return view('bor.data_produk.garden_admin');
});
Route::get('/jam_tangan', function () {
	return view('bor.data_produk.jam_admin');
});
Route::get('/anak', function () {
	return view('bor.data_produk.kids_admin');
});
Route::get('/make_up', function () {
	return view('bor.data_produk.makeup_admin');
});
Route::get('/sepatu', function () {
	return view('bor.data_produk.shoes_admin');
});
Route::get('/or', function () {
	return view('bor.data_produk.sport_admin');
});
Route::get('/utama', function () {
	return view('bor.data_produk.produk');
});
Route::get('/rubah', function () {
	return view('bor.data_produk.edit');
});

// Route::post('/produk/update', [ProductController::class, 'updateProduct'])->name('update.product');
// // End Dashboard
// end barang

// home
Route::get('/index', function () {
	return view('user/index');
});
// end home

// login/regis
Route::get('/use', function () {
	return view('user.user');
})->name('login');

Route::get('/gis', function () {
	return view('user.regis');
});
Route::get('/logout', [LogoutController::class,'logout']);
// end

// Produk Admin
Route::get('/cari',[AdminProductController::class, 'cari']);
Route::resource('/produk', AdminProductController::class);
// End Produk

// admin
// Route::get('/login', function() {
// 	return view('user.login');
// });
// end admin

// user
// Route::get('/login-user', function() {
// 	return view('user/user');
// })->name('login');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// login dewek
Route::post('/login',[App\Http\Controllers\LoginController::class, 'authenticate']);

Route::post('/register',[App\Http\Controllers\LoginController::class, 'register']);

Route::get('/tes', function () {
	return view('tes');
});