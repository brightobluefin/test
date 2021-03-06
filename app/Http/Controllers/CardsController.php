<?php

namespace App\Http\Controllers;

use DB;//import DB

use App\Card;//import card model

use Illuminate\Http\Request;

use App\Http\Requests;

class CardsController extends Controller
{
    //
    public function index()
    {
      $cards= Card::all();

      return view('cards.index',compact('cards'));
    }

    public function show(Card $card)//$card shoud be the same variable that is passing in the route
    {
      // $card= Card::with('notes.user')->find(1);
      // return $card->notes[0]->user;
      // return $card->notes;

      /*//fetch card by id
      $cards= Card::find($id);
      */
      $card->load('notes.user');
      // return $card;

      return view('cards.show',compact('card'));

    }
}
