<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="/tasks" method="POST">
            @csrf
            <input type="text" name="task" placeholder="Enter a new task">
            <button type="submit">Add Task</button>
        </form>
    </div>
</body>
</html>