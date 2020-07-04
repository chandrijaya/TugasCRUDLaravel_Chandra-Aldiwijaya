<?php

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

Route::get('/data-tables', function () {
    return view('data-tables');
});

Route::get('/items', 'ItemController@index');
Route::get('/items/create', 'ItemController@create');
Route::post('/items', 'ItemController@store');

Route::get('/pertanyaan', 'QuestController@index');
Route::get('/pertanyaan/create', 'QuestController@create');
Route::post('/pertanyaan', 'QuestController@store');

Route::get('/jawaban/{qid}', ['as' => 'forum.answer', 'uses' => 'AnswerController@index']);
Route::post('/jawaban/{qid}', ['as' => 'forum.answer', 'uses' => 'AnswerController@store']);