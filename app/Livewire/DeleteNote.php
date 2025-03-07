<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Features\SupportRedirects\Redirector;
use Illuminate\View\View;
use App\Models\Note;

class DeleteNote extends Component
{
    public int $noteId;

    /**
     * Remove the specified resource from storage.
     */
    public function deleteNote(): Redirector
    {
        /** @var Note $note */
        $note = Note::find($this->noteId);

        if ($note) {
            $note->delete();
            session()->flash('message', 'Note deleted successfully!');
        }

        return redirect()->route('notes.index');
    }

    public function render(): View
    {
        return view('livewire.delete-note');
    }
}
