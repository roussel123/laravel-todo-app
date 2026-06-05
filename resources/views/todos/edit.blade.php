@extends('layouts.app')
    @section('content')
        <h1>Edit Todo</h1>
        <form action="{{ route('todos.update', $todo->id)}}" method="POST">
            @csrf
            @method('PUT')
                <div class="form-group">    
                    <input 
                    type="text" 
                    name="title" 
                    class="form-control" 
                    value="{{ $todo->title }}" placeholder="Title">
                </div>
                <br><br>
                <div class="form-group">
                    <textarea 
                        name="description" 
                        class="form-control" 
                        placeholder="Description">{{ $todo->description }}
                    </textarea>
                </div>
                <br><br>
                <button type="submit" class="btn btn-primary">
                    Update Todo
                </button>
        </form>
    @endsection