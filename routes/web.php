<?php

Route::get('/',function(){
	return view('welcome');

});

Route::get('/notes/null', 'NotesWithoutGroupController@index');

Route::get('/notes/all', 'NotesAllGroupController@index');

Route::get('/groups/create','GroupController@create');

Route::get('/groups/{group}/notes', 'NotesController@index');

Route::get('/notes/create','NotesController@create');

Route::get('/notes/{note}', 'NotesController@show');

Route::get('/notes/{note}/edit', 'NotesController@edit');

Route::patch('/notes/{note}', 'NotesController@update');

Route::POST('/groups', 'GroupController@store');

Route::POST('/notes', 'NotesController@store');

Route::delete('/notes/{note}', 'NotesController@destroy');

Route::get('/contact', function () {
	
    return view('contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
