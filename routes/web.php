<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\BodegaController;

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

//rutas para sucursales
Route::get('sucursales/create', [sucursalController::class,'create'] )->name('sucursales.create');
Route::post('sucursales',[sucursalController::class, 'store'])->name('sucursales.store');
Route::get('sucursales/index', [sucursalController::class,'index'] )->name('sucursales.index');


//rutas para  producto
Route::get('productos/create', [ProductoController::class,'create'] )->name('productos.create');
Route::post('productos',[ProductoController::class, 'store'])->name('productos.store');
Route::get('productos/index', [ProductoController::class,'index'] )->name('productos.index');

//rutas para empresa
Route::get('empresas/create', [EmpresaController::class,'create'] )->name('empresas.create');
Route::post('empresas',[EmpresaController::class, 'store'])->name('empresas.store');
Route::get('empresas/index', [EmpresaController::class,'index'] )->name('empresas.index');

//rutas para bodega
Route::get('bodegas/create', [BodegaController::class,'create'] )->name('bodegas.create');
Route::post('bodegas',[BodegaController::class, 'store'])->name('bodegas.store');
Route::get('bodegas/index', [BodegaController::class,'index'] )->name('bodegas.index');

//rutas para proveedores uwu
Route::get('proveedores/create', [ProveedorController::class,'create'] )->name('proveedores.create');
Route::post('proveedores',[ProveedorController::class, 'store'])->name('proveedores.store');
Route::get('proveedores/index', [ProveedorController::class, 'index'] )->name('proveedores.index');

//rutas para  clientes
Route::get('clientes/create', [ClienteController::class,'create'] )->name('clientes.create');
Route::post('clientes',[ClienteController::class, 'store'])->name('clientes.store');
Route::get('clientes/index', [ClienteController::class, 'index'] )->name('clientes.index');
//rutas para  facturas
Route::get('facturas/create', [FacturaController::class,'create'] )->name('facturas.create');
Route::post('facturas',[FacturaController::class, 'store'])->name('facturas.store');
Route::get('facturas/index', [FacturaController::class, 'index'] )->name('facturas.index');
//rutas para  facturas-productos
Route::get('facturas-productos/create', [FacturaProductoController::class,'create'] )->name('facturas-productos.create');
Route::get('facturas-productos/crea', [FacturaProductoController::class,'create'] )->name('facturas-productos.crea');
Route::post('facturas-productos',[FacturaProductoController::class, 'store'])->name('facturas-productos.store');
Route::get('facturas-productos/index', [FacturaProductoController::class, 'index'] )->name('facturas-productos.index');
