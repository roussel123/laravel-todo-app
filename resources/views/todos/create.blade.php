@extends('layouts.app')
    @section('content')
        <h1>Create Todo</h1>
        @if ($errors->any)
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>            
        @endif
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