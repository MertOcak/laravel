<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/tasks', function () {

	// $tasks = DB::table('tasks')->get();

	// $tasks = DB::table('tasks')->where('created_at','<','2017-02-26 12:38:58')->get();

	$tasks = DB::table('tasks')->latest()->get();

	return view('tasks.index',compact('tasks'));

}

);

Route::get('/tasks/{task}',function($id){

	// dd($id);

	// $tasks = DB::table('tasks')->latest()->get();

	$task = DB::table('tasks')->find($id);

	// dd($task);

	return view('tasks.show',compact('task'));


});

Route::get('about',function(){

	$tasks = [

	'Turn off the lights',

	'Go to the supermarket',

	'Watch \' John Wick Chapter 2\' ',

	'Wash the car'

	];

	return view('about')->with('tasks',$tasks);

});
