<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    // Mostrar todas las tareas
    public function index()
    {
        $tasks = Task::all();
        return view('tasks', compact('tasks'));
    }

    // Crear una nueva tarea
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        Task::create([
            'title' => $request->title,
            'status' => false,
        ]);

        return redirect()->route('tasks.index');
    }

    // Cambiar el estado de una tarea
    public function update(Task $task)
    {
        $task->update(['status' => !$task->status]);
        return redirect()->route('tasks.index');
    }

    // Eliminar una tarea
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');
    }
}
