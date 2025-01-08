<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Muestra todas las tareas
    public function index()
    {
        $tasks = Task::all();  // Obtiene todas las tareas
        return view('tasks.index', compact('tasks'));
    }

    // Muestra el formulario para crear una nueva tarea
    public function create()
    {
        return view('tasks.create');
    }

    // Almacena una nueva tarea
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        Task::create([
            'title' => $request->title,
            'status' => false, // Inicializa el estado en false
        ]);

        return redirect()->route('tasks.index');
    }

    // Cambia el estado de la tarea a "completada"
    public function toggleStatus($id)
    {
        $task = Task::findOrFail($id);
        $task->status = !$task->status; // Cambia el estado
        $task->save();

        return redirect()->route('tasks.index');
    }

    // Elimina una tarea
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->route('tasks.index');
    }
}
