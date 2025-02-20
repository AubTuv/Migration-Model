<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting Page</title>
</head>
<body>
    <h1>Welcome to Laravel</h1>
    <a href="{{ route('tasks.index') }}">
    <button>View Tasks</button>
</a>

<a href="{{ route('tasks.create') }}">
    <button>Create Task</button>
</a>
</body>
</html>
