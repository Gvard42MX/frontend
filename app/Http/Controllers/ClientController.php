<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $clients = Clients::when($search, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%')
                         ->orWhere('email', 'like', '%' . $search . '%')
                         ->orWhere('phone', 'like', '%' . $search . '%')
                         ->orWhere('company', 'like', '%' . $search . '%');
        })->latest()->get();

        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:clients,email',
            'phone' => 'required',
            'company' => 'required'
        ]);

        Clients::create($validated);
        return redirect()->route('clients.index')->with('success', 'Client created successfully.');
    }

    public function edit(Clients $client)
    {
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, Clients $client)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:clients,email,' . $client->id,
            'phone' => 'required',
            'company' => 'required'
        ]);

        $client->update($validated);
        return redirect()->route('clients.index')->with('success', 'Client updated successfully.');
    }

    public function destroy(Clients $client)
    {
        $client->delete();
        return redirect()->route('clients.index')->with('success', 'Client deleted successfully.');
    }
}
