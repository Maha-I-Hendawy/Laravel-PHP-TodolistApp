@extends('layouts.app')

@section('title', 'Index Page')

@section('content')

   <h1>{{ $todo->todo }}</h1>
   <small>{{ $todo->created_at }}</small>
   <a href="/todos/{{$todo->id}}/edit">Update</a>
   <a href="#">Delete</a>


@endsection