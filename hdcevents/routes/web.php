<?php

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
    $nome = "Patrick";
    $idade = 30;
    // $profissao = "Programador";
    return view('welcome', ['nome' => $nome, "idade" => $idade, 'profissao' => "Programador"]);
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/produtos', function () {
    return view('products');
});