<?php

Route::get('/', function()
{
	return 'Peak';
});

Route::get('users', ['before' => 'auth', function()
{
	return 'users';
}]);

Route::get('login', [
	'as' => 'login_path',
	'uses' => 'SessionController@create'
]);

Route::post('login', [
	'as' => 'login_path',
	'uses' => 'SessionController@store'
]);

Route::get('logout', [
	'as' => 'logout',
	'uses' => 'SessionController@destroy'
]);
