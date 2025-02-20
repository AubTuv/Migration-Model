<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
</head>
<body>
    <h1>All Tasks</h1>

    <table border="1">
        <tr>
            <th>Title</th>
            <th>Description</th>
        </tr>
        @foreach ($tasks as $task)
    <p>{{ $task->title }} - {{ $task->description }}</p>
    
    <!-- Edit Button -->
    <a href="{{ route('tasks.edit', $task->id) }}">
        <button>Edit</button>
    </a>

    <!-- Delete Form -->
    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endforeach

    </table>

    <br>
    <a href="{{ route('tasks.create') }}">
        <button>Add Another Task</button>
    </a>

    <br>
    <a href="{{ route('/greet') }}">
        <button>Back to Greeting</button>
    </a>
</body>
</html>
