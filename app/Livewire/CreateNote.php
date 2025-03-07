<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Features\SupportRedirects\Redirector;
use Illuminate\View\View;
use App\Models\Note;

class CreateNote extends Component
{
    public string $title = '';
    public string $slug = '';
    public string $content = '';
    public ?string $deadline = null;
    public bool $is_done = false;

    /**
     * Store a newly created resource in storage.
     */
    public function createNote(): Redirector
    {
        /** @var array{title: string, slug: string, content: string, deadline: ?string, is_done: ?bool} $validated */
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
    
    public function render(): View
    {
        return view('livewire.create-note');
    }
}
