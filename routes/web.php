<?php

Route::get('/', 'TasksController@index')->name('homePage');
Route::get('/tasks/make', 'TasksController@create')->name('tasks.make');
Route::post('/tasks', 'TasksController@store');
Route::get('/tasks/{task}', 'TasksController@show')->name('tasksId');
Route::patch('/tasks/{task}', 'TasksController@update')->name('tasksUpdate');
Route::get('/tasks/{task}/edit', 'TasksController@edit')->name('tasks.edit');
Route::delete('/tasks/{task}', 'TasksController@delete')->name('tasks.delete');
