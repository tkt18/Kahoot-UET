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
    return view('welcome');
});
Route::get('/room', 'RoomController@save');
Route::get('/topic', 'TopicController@getTopic');
Route::get('/topic_save', 'TopicController@store');

//Route::resource('/topic', 'TopicController');
Route::get('/question', 'QuestionsController@getQuestion');