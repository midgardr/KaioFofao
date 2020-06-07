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

Route::get('/', ['as'=>'index', 'uses'=>'TopicoController@index']);
Route::group(['prefix'=>'topico/'], function(){
    Route::get('', ['as'=>'topico.index', 'uses'=>'TopicoController@index']);
    Route::get('create', ['as'=>'topico.create', 'uses'=>'TopicoController@create']);
    Route::post('', ['as'=>'topico.store', 'uses'=>'TopicoController@store']);
    Route::get('{topico}/edit', ['as'=>'topico.edit', 'uses'=>'TopicoController@edit']);
    Route::put('{topico}/update', ['as'=>'topico.update', 'uses'=>'TopicoController@update']);
    Route::get('{topico}/delete', ['as'=>'topico.delete', 'uses'=>'TopicoController@delete']);
    Route::get('{topico}/simular', ['as'=>'topico.simular', 'uses'=>'TopicoController@simular']);
});
Route::group(['prefix'=>'questao/'], function(){
    Route::get('', ['as'=>'questao.index', 'uses'=>'QuestaoController@index']);
    Route::get('create', ['as'=>'questao.create', 'uses'=>'QuestaoController@create']);
    Route::post('', ['as'=>'questao.store', 'uses'=>'QuestaoController@store']);
    Route::get('{questao}/edit', ['as'=>'questao.edit', 'uses'=>'QuestaoController@edit']);
    Route::put('{questao}/update', ['as'=>'questao.update', 'uses'=>'QuestaoController@update']);
    Route::get('{questao}/delete', ['as'=>'questao.delete', 'uses'=>'QuestaoController@delete']);
});
