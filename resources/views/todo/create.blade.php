<form action="{{ route('todo.store') }}" method="POST">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" required>
    <label for="description">Description:</label>
    <textarea name="description" id="description"></textarea>
    <button type="submit">Create</button>
</form>
<a href="{{ route('todo.index') }}">Back to index</a>