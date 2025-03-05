<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::all();
        return view('notes.index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:64',
            'slug' => 'required|unique:notes,slug|max:191',
            'content' => 'required',
            'deadline' => 'nullable|date',
            'is_done' => 'nullable|boolean',
        ]);
    
        Note::create([
            'title' => $validated['title'],
            'slug' => $validated['slug'],
            'content' => $validated['content'],
            'deadline' => $validated['deadline'] ?? null,
            'is_done' => $validated['is_done'] ?? false,
        ]);
    
        return redirect()->route('notes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $note = Note::findOrFail($id);

        return view('notes.show', compact('note')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $note = Note::findOrFail($id);

        return view('notes.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|max:64',
            'slug' => 'required|unique:notes,slug,' . $note->id . '|max:191',
            'content' => 'required',
            'deadline' => 'nullable|date',
            'is_done' => 'nullable|boolean',
        ]);
    
        $note->update([
            'title' => $validated['title'],
            'slug' => $validated['slug'],
            'content' => $validated['content'],
            'deadline' => $validated['deadline'] ?? null,
            'is_done' => $validated['is_done'] ?? false,
        ]);
    
        return redirect()->route('notes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $note->delete();
    
        return redirect()->route('notes.index');
    }
}
