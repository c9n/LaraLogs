<?php

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('register', 'SessionController@create');
