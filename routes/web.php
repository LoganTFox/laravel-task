<?php

Route::get('/', 'TasksController@index');
Route::get('/make', 'TasksController@create');
Route::post('/posts', 'TasksController@store');
