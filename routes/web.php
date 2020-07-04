<?php

//use App\Http\Controllers\PertanyaanController;
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
    return view('index');
});

Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::post('/pertanyaan', 'PertanyaanController@store');
Route::get('/pertanyaan/{id_pertanyaan}/', 'PertanyaanController@show');
Route::get('/pertanyaan/{id_pertanyaan}/edit', 'PertanyaanController@edit');
Route::put('/pertanyaan/{id_pertanyaan}/update', 'PertanyaanController@update');
Route::delete('/pertanyaan/{id_pertanyaan}', 'PertanyaanController@delete');
Route::get('/jawaban/{id_pertanyaan}', 'JawabanController@index');
Route::post('/jawaban/{id_pertanyaan}', 'JawabanController@store');
Route::get('/jawaban/{id_pertanyaan}/create', 'JawabanController@create');
