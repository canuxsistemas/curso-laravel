<?php

Route::get('/',function(){
	return view('welcome');

});

Route::get('/notes', 'NotesController@index');

Route::get('/notes/{id}', 'NotesController@show');

Route::get('/contact', function () {
	
    return view('contact');
});