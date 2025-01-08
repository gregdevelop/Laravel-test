<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        Task::create([
            'title' => $request->title,
            'status' => false,
        ]);

        return redirect()->route('tasks.index');
    }

    public function toggleStatus($id)
    {
        $task = Task::findOrFail($id);
        $task->status = !$task->status;
        $task->save();

        return redirect()->route('tasks.index');
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect()->route('tasks.index');
    }
}