<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;

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

Route::get('/', fn () =>redirect()->route('login'));

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('welcome');
    })->name('dashboard');
    Route::get('/kategori/dat', [KategoriController::class,'data'])->name('kategori.data');
    // Route::get('/kategori', [KategoriController::class,'index'])->name('kategori');
    Route::resource('/kategori',KategoriController::class);
});

route::group(['middleware'=>'auth'],function(){
});
