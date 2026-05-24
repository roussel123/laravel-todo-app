<h1>
    Create Todo:
</h1>
<form action="/todos" method="POST">
    @csrf
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <input type="text" name="title" placeholder="Title" minlength="3">
    <br>
    <textarea name="description" placeholder="Description"></textarea>
    <br>
    <button type="submit">Create Todo</button>
</form>
