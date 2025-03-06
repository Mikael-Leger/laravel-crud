<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Note;

class CreateNote extends Component
{
    public $title;
    public $slug;
    public $content;
    public $deadline;
    public $is_done = false;

    /**
     * Store a newly created resource in storage.
     */
    public function createNote()
    {
        $validated = $this->validate([
            'title' => 'required|min:3|max:64',
            'slug' => 'required|unique:notes,slug|min:3|max:191',
            'content' => 'required',
            'deadline' => 'nullable|date',
            'is_done' => 'nullable|boolean',
        ]);
    
        Note::create([
            'title' => $validated['title'],
            'slug' => $validated['slug'],
            'content' => $validated['content'],
            'deadline' => $this->deadline ?? null,
            'is_done' => $this->is_done,
        ]);
    
        return redirect()->route('notes.index');
    }
    
    public function render()
    {
        return view('livewire.create-note');
    }
}
