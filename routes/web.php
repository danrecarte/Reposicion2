<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\ProductoController;

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

//Empleado
Route::get('/mostrarEmpleado',[EmpleadoController::class,'mostrarEmpleado'])->name('mostrarEmpleado');
Route::post('/agregarEmpleado',[EmpleadoController::class,'agregarEmpleado'])->name('agregarEmpleado');
Route::get('/nuevoEmpleado',[EmpleadoController::class,'nuevoEmpleado'])->name('nuevoEmpleado');


//Proveedor
Route::get('/mostrarProveedor',[ProveedoresController::class,'mostrarProveedor'])->name('mostrarProveedor');
Route::post('/agregarProveedor',[ProveedoresController::class,'agregarProveedor'])->name('agregarProveedor');
Route::get('/nuevoProveedor',[ProveedoresController::class,'nuevoProveedor'])->name('nuevoProveedor');

//Producto
Route::get('/mostrarProducto',[ProductoController::class,'mostrarProducto'])->name('mostrarProducto');
Route::post('/agregarProducto',[ProductoController::class,'agregarProducto'])->name('agregarProducto');
Route::get('/nuevoProducto',[ProductoController::class,'nuevoProducto'])->name('nuevoProducto');