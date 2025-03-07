<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Note;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        /** @var Collection<Note> $notes */
        $notes = Note::all();
        return view('notes.index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('notes.create');
    }

    /**
     * Display the specified resource.
     */
    public function read(int $id): View
    {
        /** @var Note $note */
        $note = Note::findOrFail($id);

        return view('notes.read', compact('note')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id): View
    {
        /** @var Note $note */
        $note = Note::findOrFail($id);

        return view('notes.edit', compact('note'));
    }
}
