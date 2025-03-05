<?php

namespace App\Livewire;

use Livewire\Component;

class UtilsRedirect extends Component
{
    public function redirectTo($location)
    {
        return redirect($location);
    }

    public function render()
    {
        return view('livewire.utils-redirect');
    }
}
