<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::auth();
Route::get('/', 'ArticleController@index');
Route::resource('articles', 'ArticleController');
Route::get('tags/{tags}', 'TagController@show');
Route::get('/tasks', 'TaskController@index');
Route::post('/task', 'TaskController@store');
Route::delete('/task/{task}', 'TaskController@destroy');

Route::get('/chats', 'ChatController@index');

// Chat rooms
Route::get('/api/chat-rooms', array('uses' => 'ChatRoomController@getAll'));
Route::get('/api/chat-rooms/{chatRoom}', array('uses' => 'ChatRoomController@show'));
Route::post('/api/chat-rooms', array('uses' => 'ChatRoomController@create'));

// Messages api
Route::get('/api/messages/{chatRoom}', array('uses' => 'MessageController@getByChatRoom'));
Route::post('/api/messages/{chatRoom}', array('uses' => 'MessageController@createInChatRoom'));
Route::get('/api/messages/{lastMessageId}/{chatRoom}', array('uses' => 'MessageController@getUpdates'));

// Users api
Route::get('/api/users/login/kareem', array('uses' => 'UserController@loginKareem'));
Route::get('/api/users/login/mohamed', array('uses' => 'UserController@loginMohamed'));

//Route::model('chatRoom', 'ChatRoom');
