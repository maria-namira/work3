<p>Title: {{ $todo->title }}</p>
<p>Description: {{ $todo->description }}</p>
<p>Created at: {{ $todo->created_at }}</p>
<p>Updated at: {{ $todo->updated_at }}</p>
<a href="{{ route('todo.index') }}">Back to index</a>