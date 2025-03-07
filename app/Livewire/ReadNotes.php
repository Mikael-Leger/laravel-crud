<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\View\View;
use App\Models\Note;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;

class ReadNotes extends Component
{
    public string $search = '';
    /** @var Collection<Note> $notes */
    public $notes = [];

    public function mount(): void
    {
        $this->search = request()->query('search', '');
    }

    public function generateData(): void
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

    public function render(): View
    {
        /** @var Builder $query */
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
