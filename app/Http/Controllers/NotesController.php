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
      $this->validate($request,[
        'body'=>'required|min:5'
      ]);

      // $note=new Note;

      // $note->body= $request->body;
      //
      //  $note=new Note(['body'=>$request->body]);
      //
      // $card->notes()->save($note);

      //$card->notes()->save(new Note(['body'=>$request->body]));
      //$card->notes()->create(['body'=>$request->body]);

      $note= new Note($request->all());

      $card->addNote($note,1);

      return back();
    }
    public function edit(Note $note)
    {
      return view ('notes.edit',compact('note'));
    }

    public function update(Request $request, Note $note)
    {
      $note->update($request->all());
      return redirect('/cards');
    }
}
