<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Note;

class EditNote extends Component
{
    public $noteId;
    public $title;
    public $slug;
    public $content;
    public $deadline;
    public $is_done;

    public function mount($noteId)
    {
        $note = Note::findOrFail($noteId);

        $this->noteId = $note->id;
        $this->title = $note->title;
        $this->slug = $note->slug;
        $this->content = $note->content;
        $this->deadline = $note->deadline;
        $this->is_done = $note->is_done;
    }

    /**
     * Update the specified resource in storage.
     */
    public function editNote()
    {
        $note = Note::findOrFail($this->noteId);

        $validated = $this->validate([
            'title' => 'required|max:64',
            'slug' => 'required|unique:notes,slug,' . $this->noteId . '|max:191',
            'content' => 'required',
            'deadline' => 'nullable|date',
            'is_done' => 'nullable|boolean',
        ]);
    
        $note->update([
            'title' => $validated['title'],
            'slug' => $validated['slug'],
            'content' => $validated['content'],
            'deadline' => $this->deadline ?? null,
            'is_done' => $this->is_done
        ]);
    
        return redirect()->route('notes.index');
    }

    public function render()
    {
        return view('livewire.edit-note');
    }
}
