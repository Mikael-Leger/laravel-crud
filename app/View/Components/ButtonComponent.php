<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonComponent extends Component
{
    /** @var callable */
    public $onclick;

    /**
     * Create a new component instance.
     */
    public function __construct(callable $onclick = null)
    {
        $this->onclick = $onclick;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
