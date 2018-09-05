<?php


Route::get('/', function () {

	$notes = [
		[
			'title' => 'variables',
			'body' => 'como se declaran e imprimen',
			'important' => true

		],
		[
			'title' => 'imprimir',
			'body' => 'las variables con blade en laravel se imprimen en {{}}',
			'important' => true

		],

	];

    return view('welcome' , ['notes' => $notes]);
});

Route::get('/contact', function () {
	
    return view('contact');
});
