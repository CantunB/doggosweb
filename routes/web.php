<?php

use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\ToAdoptController;
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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('dar_adopcion', AdoptionController::class);
Route::resource('adoptar', ToAdoptController::class);
Route::get('mascotas', [App\Http\Controllers\Controller::class, 'mascotas'])->name('mascotas');
Route::get('servicios', [App\Http\Controllers\Controller::class, 'servicios'])->name('servicios');
Route::get('veterinarios', [App\Http\Controllers\Controller::class, 'veterinarios'])->name('veterinarios');
Route::get('contacto', [App\Http\Controllers\Controller::class, 'contacto'])->name('contacto');
