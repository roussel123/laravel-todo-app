<h1>Todo List</h1>

<a href="/todos/create">Add Todo</a>

<hr>
<table style="width:100% max-width:500px margin:0 auto">
    @foreach($todos as $todo)
    <h3>{{ $todo->title }}</h3>
    <p>{{ $todo->description }}</p>
    <a href="{{ route('todos.edit', $todo->id) }}"> Edit </a>
    
    <form action="{{ route('todos.destroy', $todo->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">
            Delete
        </button>
    </form>
    <hr>
@endforeach
</table>
