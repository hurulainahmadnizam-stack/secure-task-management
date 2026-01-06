<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    // Show all tasks (user sees own tasks, admin sees all)
    public function index()
    {
        if (Auth::user()->role === 'admin') {
            $tasks = Task::latest()->get();
        } else {
            $tasks = Task::where('user_id', Auth::id())->latest()->get();
        }

        return view('tasks.index', compact('tasks'));
    }

    // Show create task form
    public function create()
    {
        return view('tasks.create');
    }

    // Store new task
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task created');
    }

    // Show edit form
    public function edit(Task $task)
    {
        // Security: owner OR admin only
        if (Auth::id() !== $task->user_id && Auth::user()->role !== 'admin') {
            abort(403);
        }

        return view('tasks.edit', compact('task'));
    }

    // Update task
    public function update(Request $request, Task $task)
    {
        if (Auth::id() !== $task->user_id && Auth::user()->role !== 'admin') {
            abort(403);
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:pending,completed',
        ]);

        $task->update($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task updated');
    }

    // Delete task
    public function destroy(Task $task)
    {
        if (Auth::id() !== $task->user_id && Auth::user()->role !== 'admin') {
            abort(403);
        }

        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Task deleted');
    }
}
