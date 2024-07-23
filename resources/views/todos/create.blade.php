@extends('layouts.app')

@section('title', 'Index Page')

@section('content')

   <h1>Add a Todo</h1>
   <form action="{{ route('todos.store')}}" method="post">
      @csrf
      <label>Todo:</label>
      <input type="text" name="todo">
      <input type="submit" value="Add">
   </form>


@endsection