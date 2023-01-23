<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\MontirController;
use App\Http\Controllers\ServiceController;;
use App\Http\Controllers\TransaksiController;;
use App\Http\Controllers\PDFController;;

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

Route::get('/', function () {
    return view('frontEnd.layouts.index');
});
Route::get('/kontak', function () {
    return view('frontEnd.page.countak');
});
// Route::get('/pesan', function () {
//     return view('frontEnd.page.pesan');
// });

Auth::routes();

Route::get('transaksi',[ProfileController::class,'create'])->name('transaksi.create');
Route::post('transaksi/store',[ProfileController::class,'store'])->name('transaksi.store');
// Route::resource('pesan',TransaksiController::class);
// Route::resource('transaksi',ProfileController::class);

Route::group(['middleware'=>['auth','isAdmin:admin']],function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Route::get('MyProfile',[UserController::class,'profile'])->name('profile');
    // user
    Route::get('user/profile/{id}', [UserController::class,'profile'])->name('user.profile');
    Route::post('user/profile/update', [UserController::class,'update'])->name('user.update');
    //transaksi 
    Route::get('tabel/transaksi',[ProfileController::class,'adminTable'])->name('transaksi.adminTable');
    Route::put('tabel/transaksi/update{id}',[ProfileController::class,'update'])->name('transaksi.update');
    //pdf
    Route::get('laporan',[PDFController::class,'index'])->name('laporan.index');
    Route::post('laporan/print',[PDFController::class,'print'])->name('laporan.print');
    Route::get('laporan/print/struk/{id}',[PDFController::class,'show'])->name('laporan.show');
    Route::get('laporan/generate',[PDFController::class,'generatePdf'])->name('laporan.generate');
    
    Route::resource('user',UserController::class);
    Route::resource('setting',ProfileController::class);
    Route::resource('barang',BarangController::class);
    Route::resource('montir',MontirController::class);
    Route::resource('service',ServiceController::class);
});
