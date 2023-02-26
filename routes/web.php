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

Route::resource('posts','PostController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//マッチング（いいね機能）
Route::post('posts/{post}/favorites', 'FavoriteController@store')->name('favorites');
Route::post('posts/{post}/unfavorites', 'FavoriteController@destroy')->name('unfavorites');
Route::post('posts/{post}/matching', 'FavoriteController@matching')->name('matching');

Route::get('search', function () {
    return view('search.search');
});
Route::get('search', 'SearchController@search')->name('search');

Route::get('show', 'SearchController@search')->name('show');
Route::get('searchresult', 'SearchController@searchresult');
Route::post('searchresult','SearchController@searchresult')->name('searchresult');
Route::get('searchcheck', 'SearchController@searchcheck');
Route::post('searchcheck', 'SearchController@searchcheck')->name('searchcheck');

//マイページ
Route::post('users/show/{user}', 'UserController@show')->name('users.show');
Route::Post('users/{id}/myposts', 'UserController@myposts')->name('users.myposts');
Route::post('users/{user}/followed','UserController@followed')->name('users.followed');
Route::post('users/{user}/follower','UserController@follower')->name('users.follower');
Route::get('users/{user}/profile', 'UserController@profile')->name('users.profile');
Route::Post('users/{id}/liked','UserController@liked')->name('users.liked');


Route::Post('destroy/{id}', 'PostController@destroy')->name('destroy');

//フォロー機能
Route::post('users/{user}/follow','FavoriteController@follow')->name('follow');
Route::post('users/{user}/unfollow','FavoriteController@unfollow')->name('unfollow');

//チャット機能
Route::get('chats/{id}/show','ChatController@show')->name('chats.show');
Route::post('chats','ChatController@store')->name('chats.store');
Route::get('chats','ChatController@index')->name('chats.index');
Route::get('chats/{id}/json','ChatController@json')->name('chats.json');
Route::post('chats/{id}/destroy','ChatController@destroy')->name('chats.destroy');

//チャット相手の一覧表示
Route::post('users/{id}/chat','ChatroomController@store')->name('chatroom.store');
Route::get('users/{id}/chat','ChatroomController@index')->name('users.chats');