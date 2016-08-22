<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class PageController extends Controller
{
    //
    public function home()
    {
      $fruit=['apple','banana','mango'];

      return view('welcome')->with('fruit',$fruit);

    }
    public function about()
    {
      return view('pages.about');
    } 
}
