@extends('layouts.app')

@section('title', 'Index Page')

@section('content')

   <h1>Todos List</h1>
   @if(count($todos) > 0)
     <ul>
      @foreach($todos as $todo)
         <li><a href="/todos/{{$todo->id}}">{{ $todo->todo }}</a> <a href="/todos/{{$todo->id}}/edit">Update</a> <a href="#">Delete</a></li>
      @endforeach
     </ul>
   @else
     <p>No Todos Found</p>
   @endif


@endsection