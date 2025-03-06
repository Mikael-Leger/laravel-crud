<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Note;

class ReadNote extends Component
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

    public function render()
    {
        return view('livewire.read-note');
    }
}
