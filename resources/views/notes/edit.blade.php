@extends('layout')

@section('content')
  <h1>Edit Notes</h1>

  <form  action="/notes/{{$note->id}}" method="POST">
    {{method_field('PATCH')}}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
        <textarea name="body" class="form-control">{{$note->body}}</textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn bhtn-primary" >Update note</button>
    </div>

  </form>
@stop
