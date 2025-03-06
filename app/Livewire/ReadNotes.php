<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Note;
use Carbon\Carbon;

class ReadNotes extends Component
{
    public $search = '';
    public $notes = [];

    public function mount()
    {
        $this->search = request()->query('search', '');
    }

    public function generateData()
    {
        for ($i = 1; $i < 10; $i++) {
            Note::create([
                'title' => 'Note '. $i,
                'slug' => 'note-'. $i,
                'content' => 'Je suis la note n°' . $i,
                'deadline' => Carbon::parse('2025-04-06'),
                'is_done' => $i % 3 === 0,
            ]);
        }
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
