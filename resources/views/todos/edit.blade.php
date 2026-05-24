<h1>Edit Todo</h1>

<form action="{{ route('todos.update', $todo->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="title" value="{{ $todo->title }}" placeholder="Title">
    <br>
    <textarea name="description" placeholder="Description">{{ $todo->description }}</textarea>
    <br>
    <button type="submit">Update Todo</button>
</form>
