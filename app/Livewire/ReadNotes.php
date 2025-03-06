<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Note;

class ReadNotes extends Component
{
    public $search = '';
    public $notes = [];

    public function mount()
    {
        $this->search = request()->query('search', '');
    }

    public function render()
    {
        $query = Note::query();
    
        if (!empty($this->search)) {
            $query->where('title', 'like', "%{$this->search}%")
                  ->orWhere('slug', 'like', "%{$this->search}%")
                  ->orWhere('content', 'like', "%{$this->search}%");
        }
    
        $this->notes = $query->get();

        return view('livewire.read-notes', ['notes' => $this->notes]);
    }
}
