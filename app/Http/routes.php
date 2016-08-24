<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/about',function(){
   return view('pages.about');
});*/
//Route::group(['middleware'=>['web']],function(){

  Route::get('cards','CardsController@index');

  Route::get('cards/{card}','CardsController@show');

  Route::post('cards/{card}/notes','NotesController@store');//creates note

  Route::get('notes/{note}/edit','NotesController@edit');//edit notes

  Route::patch('notes/{note}','NotesController@update');

  Route::get('notes/{note}/delete','NotesController@delete');//delete notes

//});

Route::get('/','PageController@home');
Route::get('/about','PageController@about');
