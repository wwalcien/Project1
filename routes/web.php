<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
    Route::get('/tasks', function () {
	$tasks = DB::table('tasks')->get();
	//$tasks = App\Task:all();
	return view('tasks.index', compact('tasks'));
	});
    Route::get('/tasks/{task}', function($id) {
	$task = DB::table('tasks')->find($id);
	//dd($task);
	return view('tasks.show', compact('tasks'));
	});





