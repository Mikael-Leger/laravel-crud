<?php

namespace App\Livewire;

use Livewire\Component;
use DateTime;

class UtilsDateFormat extends Component
{
    public $date;
    public $diff;

    public function mount($date)
    {
        $now = new DateTime();
        $date_time = new DateTime($date);
        $this->diff = $now->diff($date_time)->days+1;
    }

    public function render()
    {
        return view('livewire.utils-date-format');
    }
}
