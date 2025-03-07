<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Features\SupportRedirects\Redirector;
use Illuminate\View\View;
use App\Models\Note;

class EditNote extends Component
{
    public int $noteId;
    public string $title;
    public string $slug;
    public string $content;
    public ?string $deadline;
    public bool $is_done;

    public function mount($noteId): void
    {
        /** @var Note $note */
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
    public function editNote(): Redirector
    {
        /** @var Note $note */
        $note = Note::findOrFail($this->noteId);

        /** @var array{title: string, slug: string, content: string, deadline: ?string, is_done: ?bool} $validated */
        $validated = $this->validate([
            'title' => 'required|min:3|max:64',
            'slug' => 'required|unique:notes,slug,' . $this->noteId . '|min:3|max:191',
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

    public function render(): View
    {
        return view('livewire.edit-note');
    }
}
