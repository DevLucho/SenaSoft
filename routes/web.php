<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\BodegaController;
use Illuminate\Support\facades\Mail;

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

    // envio de email

    $datos=[
        "titulo"=>"Hola",
        "contenido"=>"Prueba envio"
    ];

    Mail::send('emails.test', $datos, function ($message) {
        // $message->from('john@johndoe.com', 'John Doe');
        $message->sender('Hackathon@gmail.com', 'John Doe');
        $message->to('ldhuertas56@misena.edu.co', 'Luis Huertas');
        // $message->cc('john@johndoe.com', 'John Doe');
        // $message->bcc('john@johndoe.com', 'John Doe');
        // $message->replyTo('john@johndoe.com', 'John Doe');
        $message->subject('Mensaje Importante');
        // $message->priority(3);
        // $message->attach('pathToFile');
    });

    return view('welcome');

});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//rutas para sucursales
Route::get('sucursales/create', [sucursalController::class,'create'] )->name('sucursales.create');
Route::post('sucursales/index',[sucursalController::class, 'store'])->name('sucursales.store');
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

//rutas para


//rutas para

Route::resource('productos', ProductoController::class);

Route::post('welcome', [ProductoController::class, 'importExcel'])->name('import.excel');

