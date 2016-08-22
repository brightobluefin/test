@extends('layout')

@section('content')

  @if(5+3<>0)
    it is zero
  @else
    It is not zero
  @endif

  @foreach ($fruit as $fruits)
    <li>{{$fruits}}</li>
  @endforeach
  
@stop
