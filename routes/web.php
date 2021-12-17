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

//マッチング
Route::post('posts/{post}/favorites', 'FavoriteController@store')->name('favorites');
Route::post('posts/{post}/unfavorites', 'FavoriteController@destroy')->name('unfavorites');
Route::post('posts/{post}/matching', 'FavoriteController@matching')->name('matching');

// Route::get('search', function () {
//     return view('search.search');
// });
Route::get('search', 'SearchController@search')->name('search');

Route::get('show', 'SearchController@search')->name('show');
Route::get('searchresult', 'SearchController@searchresult');
Route::post('searchresult','SearchController@searchresult')->name('searchresult');
// Route::post('post.destroy/{id}', 'PostController@destroy');

//マイページ
Route::post('users/{user}/show', 'UserController@show')->name('users.show');
Route::Post('users/{id}/myposts', 'UserController@myposts')->name('users.myposts');
Route::Post('users/{id}/liked','UserController@liked')->name('users.liked');
Route::post('users/{user}/followed','UserController@followed')->name('users.followed');
Route::post('users/{user}/follower','UserController@follower')->name('users.follower');
Route::get('users/{user}/profile', 'UserController@profile')->name('users.profile');

//フォロー機能
Route::post('users/{user}/follow','FavoriteController@follow')->name('follow');
Route::post('users/{user}/unfollow','FavoriteController@unfollow')->name('unfollow');

//チャット機能
Route::post('chats/{id}/show','ChatController@show')->name('chats.showPost');
Route::post('chats','ChatController@store')->name('chats.store');
Route::get('chats','ChatController@index')->name('chats.index');
// Route::resource('chats','ChatController');