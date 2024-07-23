@extends('layouts.app')

@section('title', 'Index Page')

@section('content')

   <h1>Edit a Todo</h1>
   <form action="{{ route('todos.update', $todo->id)}}" method="post">
      @csrf
      @method('PUT')
      <label>Todo:</label>
      <input type="text" name="todo" value="{{ $todo->todo }}">
      <input type="submit" value="Update">
   </form>


@endsection