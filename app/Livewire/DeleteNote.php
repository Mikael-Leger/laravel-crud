<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Note;

class DeleteNote extends Component
{
    public $noteId;

    /**
     * Remove the specified resource from storage.
     */
    public function deleteNote()
    {
        $note = Note::find($this->noteId);

        if ($note) {
            $note->delete();
            session()->flash('message', 'Note deleted successfully!');
        }

        return redirect()->route('notes.index');
    }

    public function render()
    {
        return view('livewire.delete-note');
    }
}
