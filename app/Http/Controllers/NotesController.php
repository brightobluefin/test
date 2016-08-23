<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Note;//import note model
use App\Card;//import card model

class NotesController extends Controller
{
    //
    public function store(Request $request,Card $card)
    {
      $note=new Note;

      $note->body= $request->body;
      //
      //  $note=new Note(['body'=>$request->body]);
      //
      $card->notes()->save($note);

      //$card->notes()->save(new Note(['body'=>$request->body]));
      //$card->notes()->create(['body'=>$request->body]);

      return back();
    }
}
