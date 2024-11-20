<?php

namespace App\Http\Controllers;

use App\Models\Projects; // Use Project model
use App\Models\Clients; // Use Client model
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        
        $projects = Projects::with('client')
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', '%' . $search . '%')
                             ->orWhereHas('client', function ($query) use ($search) {
                                 $query->where('name', 'like', '%' . $search . '%');
                             });
            })
            ->latest()
            ->get();

        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        $clients = Clients::all(); // Corrected Client model name
        return view('projects.create', compact('clients'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'status' => 'required',
            'client_id' => 'required|exists:clients,id'
        ]);

        Projects::create($validated);
        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    public function edit(Projects $project)
    {
        $clients = Clients::all(); // Corrected Client model name
        return view('projects.edit', compact('project', 'clients'));
    }

    public function update(Request $request, Projects $project)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'status' => 'required',
            'client_id' => 'required|exists:clients,id'
        ]);

        $project->update($validated);
        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Projects $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}
