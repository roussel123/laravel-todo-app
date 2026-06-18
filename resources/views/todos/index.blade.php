@extends('layouts.app')
@section('content')
    @foreach ($todos as $todo)
        <h3>{{ $todo->title }}</h3>
        <p>{{ $todo->description }}</p>
        <a href="{{ route('todos.edit', $todo->id) }}"> 
            Edit 
        </a>
        <form action="{{ route('todos.destroy', $todo->id) }}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit">
                Delete
            </button>
        </form>
        <hr>
    @endforeach
@endsection