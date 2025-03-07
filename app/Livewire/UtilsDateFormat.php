<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\View\View;
use DateTime;

class UtilsDateFormat extends Component
{
    public ?string $date;
    public $diff;

    public function mount(?string $date): void
    {
        $now = new DateTime();
        $date_time = new DateTime($date);
        $this->diff = $now->diff($date_time)->days+1;
    }

    public function render(): View
    {
        return view('livewire.utils-date-format');
    }
}
