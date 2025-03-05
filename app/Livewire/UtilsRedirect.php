<?php

namespace App\Livewire;

use Livewire\Component;

class UtilsRedirect extends Component
{
    public $location;

    public function redirectTo()
    {
        return redirect($this->location);
    }

    public function render()
    {
        return view('livewire.utils-redirect');
    }
}
