<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\MontirController;

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
    return view('welcome');
});

Auth::routes();


Route::group(['middleware'=>['auth','isAdmin:admin']],function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Route::get('MyProfile',[UserController::class,'profile'])->name('profile');
    Route::get('user/profile/{id}', [UserController::class,'profile'])->name('user.profile');
    Route::post('user/profile/update', [UserController::class,'update'])->name('user.update');
    
    Route::resource('user',UserController::class);
    Route::resource('setting',ProfileController::class);
    Route::resource('barang',BarangController::class);
    Route::resource('montir',MontirController::class);
});
