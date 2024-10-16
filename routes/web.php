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



Route::get('/', function () {
    return view('Events');
});
|
*/





      Route::get('/', 'PagesController@index');
      Route::get('/amigos', 'PagesController@amigos');
      Route::get('/sobre', 'PagesController@sobre');
      Route::get('/tipo_eventos/novo', 'tipo_eventosController@create');
      Route::post('/tipo_evento/novo' , 'tipo_eventosController@store') ->name('registrar_evento');
      Route::get('/produto/ver/{id}', 'tipo_eventosController@show');
      Route::get('/produto/editar/{id}', 'tipo_eventosController@edit');
      Route::post('/produto/editar/{id}', 'tipo_eventosController@update') ->name('alterar_evento');
      Route::get('/produto/excluir/{id}', 'tipo_eventosController@delete');
      Route::post('/produto/excluir/{id}', 'tipo_eventosController@destroy')  ->name('excluir_evento');  ;
