<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Field extends Component
{
    public string $name;
    public string $label;
    public string|bool $value;
    public string $type;
    public bool $required;

    /**
     * Create a new component instance.
     */
    public function __construct(string $name, string $label, string|bool $value, string $type = 'type', bool $required = false)
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
