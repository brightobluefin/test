@extends('layout')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1>{{$card->title}}</h1>

      <ul class="list-group">
        @foreach ($card->notes as $note)
          <li class="list-group-item">{{$note->body}}</li>
        @endforeach
      </ul>

      <h3>Add a Note</h3>

      <form  action="/cards/{{$card->id}}/notes" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <textarea name="body" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn bhtn-primary" >Add note</button>
        </div>

      </form>
    </div>
  </div>

@stop
