<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
</head>
<body>
    <h1>To-Do List</h1>

    <a href="{{ route('tasks.create') }}">Crear nueva tarea</a>

    <div class="tasks">
        @foreach ($tasks as $task)
            <div class="task">
                <h3>{{ $task->title }}</h3>
                <p>Status: {{ $task->status ? 'Completada' : 'Pendiente' }}</p>
                <form action="{{ route('tasks.toggleStatus', $task->id) }}" method="POST">
                    @csrf
                    <button type="submit">{{ $task->status ? 'Marcar como Pendiente' : 'Marcar como Completada' }}</button>
                </form>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </div>
        @endforeach
    </div>
</body>
</html>
