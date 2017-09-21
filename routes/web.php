<?php

Route::get('/', 'TasksController@index')->name('homePage');
Route::get('/make', 'TasksController@create')->name('createTask');
Route::post('/posts', 'TasksController@store');
