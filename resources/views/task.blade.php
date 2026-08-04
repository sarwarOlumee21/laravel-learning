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
            @method('DELETE')
            @csrf
            <input type="text" name="task" placeholder="Enter a new task">
            <button type="submit">Add Task</button>
        </form>

        <div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Task</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td>{{ $task->id }}</td>
                            <td>{{ $task->task }}</td>
                            <td>{{ $task->created_at }}</td>
                            <td>{{ $task->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button><a href="/contracts/1/print">print</a></button>
        </div>
    </div>
</body>
</html>