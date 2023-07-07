<?php

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

Route::get('/contato', function() {
    echo 'Estou na página de contato';
});

Route::get('/sobre', function() {
    echo 'Estou na página de sobre';
});

Route::get('/produtos', function() {
    echo 'Estou na página de produtos';
});
