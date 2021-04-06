<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\ProdutosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| Route::get('/', function () {
    return view('welcome');
});
*/

Route::resource('produtos' , 'ProdutosController');
Route::get('produtos/delete/{id}', 'ProdutosController@destroy');

Route::resource('fornecedores' , 'FornecedorController');
Route::get('fornecedores/delete/{id}', 'FornecedorController@destroy');

Auth::routes();


