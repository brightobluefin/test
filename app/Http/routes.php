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

Route::get('/', function () {
  $fruit=['apple','banana','mango'];
    //return view ('welcome',['fruit'=>$fruit]);
    //return view('welcome',compact('fruit'));
    //return view('welcome')->withPeople($fruit);
    return view('welcome')->with('fruit',$fruit);
});

Route::get('/about',function(){
   return view('pages.about');
});
