<?php

Route::get('/', function()
{
	return 'Peak';
});

Route::get('register', [
	'as' => 'register_path',
	'uses' => 'SessionController@create'
]);

Route::post('register', [
	'as' => 'register_path',
	'uses' => 'SessionController@store'
]);
