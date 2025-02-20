<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
</head>
<body>
    <h1>Create a New Task</h1>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" required>
        
        <label for="description">Description:</label>
        <textarea name="description"></textarea>
        
        <button type="submit">Add Task</button>
    </form>

    <br>
    <a href="{{ route('tasks.index') }}">
        <button>View Tasks</button>
    </a>
</body>
</html>
