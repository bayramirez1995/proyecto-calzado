<?php

use App\Http\Controllers\DetalleventaController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Models\detalleventa;
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

Route::resource('producto', ProductoController::class);
Route::resource('marca', MarcaController::class);
Route::resource('proveedor', ProveedorController::class);
Route::resource('detalleventa', DetalleventaController::class);