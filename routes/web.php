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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',"todoController@goHome");
Route::get('/todo',"todoController@goTodo");
Route::post('/todo',"todoController@postTodo");
Route::post('/del',"todoController@delTodo");
