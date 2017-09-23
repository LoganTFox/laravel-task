<?php

Route::get('/', 'TasksController@index')->name('homePage');
Route::get('/tasks/make', 'TasksController@create')->name('tasks.make');
Route::post('/tasks', 'TasksController@store');
Route::get('/tasks/{task}', 'TasksController@show')->name('tasksId');
Route::get('/tasks/{task}/edit', 'TasksController@edit')->name('tasks.edit');
