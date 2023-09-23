@foreach ($todos as $todo)
    <p>{{ $todo->title }}</p>
    <a href="{{ route('todo.show', $todo->id) }}">Details</a>
@endforeach
<a href="{{ route('todo.create') }}">Create new to-do</a>