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
    return view('welcome');
});

// Route::get('hello/{name?}', function($name = 'Tony'){
//	echo "Hello World" . "&nbsp;" . $name;
// });

/*
Route::get('index', function(){
	return view('pages.index');
});


Route::get('about', function(){
	return view('pages.about');
});
*/

// Route::get('contact', function(){

//	return view('pages.contact');
// });

Route::get('index', 'PagesController@getIndex');
Route::get('about', 'PagesController@getAbout');

// Route::resource('posts', 'PostController');

Route::resource('students', 'StudentController');

// Route::resource('irtiza', 'IrtizaController');
















