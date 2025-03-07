<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\View\View;
use App\Models\Note;

class ReadNote extends Component
{
    public int $noteId;
    public string $title;
    public string $slug;
    public string $content;
    public ?string $deadline;
    public bool $is_done;

    public function mount(int $noteId): void
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

    public function render(): View
    {
        return view('livewire.read-note');
    }
}
