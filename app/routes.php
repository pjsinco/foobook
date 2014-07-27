<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	//return View::make('hello');
  return 'Hello, world';
});

Route::get('/books', function() {
  return 'Here are all the books ... ';
});

Route::get('/books/{category}', function($category) {
  return "here are all the books in $category";
});

Route::get('/new', function() {

  $view = "<form method='POST'>";
  $view .= "Title: <input type='text' name='title'>";
  $view .= "<input type='submit'>";
  $view .= "</form>";
  return $view;

});

Route::post('/new', function() {
  //$input = Input::get('title');
  $input = Input::all();
  print_r($input);
});

Route::get('/practice', function() {
  echo 'Hello, world' . "\r\n";
  echo App::environment();
});


Route::get('/practice/pre', function() {

  $simpsons = array('Homer', 'Marge', 'Lisa',
    'Bart', 'Maggie');
  $brady_boys = array('Mike', 'Greg', 'Peter', 'Bobby');

  // note: 'Paste\Pre' is aliased in /app/config/app.php
  Pre::add($simpsons, 'debug 1');
  Pre::add($brady_boys, 'debug 2');

  echo Paste\Pre::r();

});
