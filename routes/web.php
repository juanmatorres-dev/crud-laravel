<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController; // Lo enlazamos con el controlador de Empleados

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
    return view('auth.login');
});


/**
 * Rutas de Empleado
 */

/**
 * Index: Lista todos los empleados
 */
/*
Route::get('/empleado', function () {
    return view('empleado.index');
});
*/

/**
 * Create: Para crear un empleado
 */
//Route::get('/empleado/create',[EmpleadoController::class, 'create']);

// Mapea todas las rutas del modelo empleado
Route::resource('empleado', EmpleadoController::class);
Auth::routes();

Route::get('/home', [EmpleadoController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [EmpleadoController::class, 'index'])->name('home');
});