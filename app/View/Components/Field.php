<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Field extends Component
{
    public $name;
    public $label;
    public $value;
    public $type;
    public $required;

    /**
     * Create a new component instance.
     */
    public function __construct($name, $label, $value, $type, $required)
    {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->type = $type;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.field');
    }
}
