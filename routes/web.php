<?php

use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto', function () {
    return view("contacto");
});

Route::post('/guardar-formulario', function(Request $request) {
    //Recibir datos
    dd($request->all(), $request->nombre);

    //Validar datos

    //Guardar datos
    

    //Redireccionar datos
});