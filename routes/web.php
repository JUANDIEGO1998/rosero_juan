<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Principal;
use App\Http\Controllers\Libros;
use App\Http\Controllers\Editorial;
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


Route::get('/', [Principal::class, 'index']); 
Route::get('/listar/libros', [libros::class, 'index'])->name('listado_libros'); 
Route::get('/listar/editorial', [Editorial::class, 'index'])->name('listado_editorial');
Route::get('/listar/formulario/editorial', [Editorial::class, 'registro'])->name('registro_editorial');
Route::post('/formulario/registro', [Editorial::class, 'registros'])->name('registro_edit');
Route::get('/formulario/actualizar/{id}', [Editorial::class, 'actualiza'])->name('actualiza_editor');
Route::post('/formulario/actualizar/{id}', [Editorial::class, 'actualiza_formulario'])->name('actualiza_editores');

