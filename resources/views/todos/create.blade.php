@extends('layouts.app')
    @section('content')
        <h1>Create Todo</h1>
            <form action="{{ route('todos.store')}}" method="POST">
                @csrf
                <input type="text" name="title" placeholder="Title">
                <br></br>
                <textarea name="description" placeholder="Description"></textarea>         
                <br></br>
                <button type="submit">
                    Create Todo
                </button>    
            </form>
    @endsection