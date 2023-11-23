<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

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

Route::get(uri: '/',action: function () {
    return view(view:'welcome');
});

Route::middleware('auth')->group(function() {
    Route::resource(name: 'fakultas', controller: FakultasController::class);
    Route::resource(name: 'prodi', controller: ProdiController::class);
    Route::resource(name: 'mahasiswa', controller: MahasiswaController::class);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');