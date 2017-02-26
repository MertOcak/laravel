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

Route::get('/', function () {

	$tasks = DB::table('tasks')->get();

	return view('welcome',compact('tasks'));

}

);

Route::get('about',function(){

	$tasks = [

	'Turn off the lights',

	'Go to the supermarket',

	'Watch \' John Wick Chapter 2\' ',

	'Wash the car'

	];

	return view('about')->with('tasks',$tasks);

});
