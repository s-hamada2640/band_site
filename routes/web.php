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
    return view('welcome');
});

// Route::resource('people', PersonController::class);

//index(一覧画面)
Route::get("people", "PersonController@index");
//create(登録画面)
Route::get("people/create", "PersonController@create");
//show(表示画面)
Route::get("people/{id}", "PersonController@show");
//store(登録データ保存)
Route::post("people/store", "PersonController@store");
//edit(編集画面)
Route::get("people/{id}/edit", "PersonController@edit");
//update(更新画面)
Route::put("people/{id}", "PersonController@update");
//destroy(削除画面)
Route::delete("people/{id}", "PersonController@destroy");