{{-- resources/views/tasks.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> {{-- Si usas Tailwind o Bootstrap --}}
</head>
<body>
    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold">Task List</h1>

        {{-- Mostrar las tareas --}}
        <table class="table-auto border-collapse border border-gray-300 w-full mt-4">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 px-4 py-2">#</th>
                    <th class="border border-gray-300 px-4 py-2">Title</th>
                    <th class="border border-gray-300 px-4 py-2">Description</th>
                    <th class="border border-gray-300 px-4 py-2">Status</th>
                    <th class="border border-gray-300 px-4 py-2">Due Date</th>
                    <th class="border border-gray-300 px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $task->title }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $task->description }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            {{ $task->status ? 'Completed' : 'Pending' }}
                        </td>
                        <td class="border border-gray-300 px-4 py-2">{{ $task->due_date->format('d M Y') }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <a href="{{ route('tasks.edit', $task->id) }}" class="text-blue-500">Edit</a> |
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Botón para agregar una nueva tarea --}}
        <a href="{{ route('tasks.create') }}" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">
            Add New Task
        </a>
    </div>
</body>
</html>
