<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $tasks = Tasks::with('project')
            ->when($search, function ($query, $search) {
                return $query->where('title', 'like', '%' . $search . '%')
                             ->orWhereHas('project', function ($query) use ($search) {
                                 $query->where('name', 'like', '%' . $search . '%');
                             });
            })
            ->latest()
            ->get();

        return view('tasks.index', compact('tasks', 'search'));
    }

    public function create()
    {
        $projects = Projects::all();
        return view('tasks.create', compact('projects'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'project_id' => 'required|exists:projects,id',
            'due_date' => 'required|date',
            'status' => 'required|in:pending,in_progress,completed'
        ]);

        Tasks::create($validated);
        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    public function edit(Tasks $task)
    {
        $projects = Projects::all();
        return view('tasks.edit', compact('task', 'projects'));
    }

    public function update(Request $request, Tasks $task)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'project_id' => 'required|exists:projects,id',
            'due_date' => 'required|date',
            'status' => 'required|in:pending,in_progress,completed'
        ]);

        $task->update($validated);
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }

    public function destroy(Tasks $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }
}
