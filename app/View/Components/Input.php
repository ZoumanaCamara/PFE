<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    
    public function __construct(
        public string $label = '',
        public string $type,
        public string $name, 
        public ?string $id = null,
        public ?string $value = null,
        public string $help = ''
    )
    {
        $this->id ??= $this->name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
