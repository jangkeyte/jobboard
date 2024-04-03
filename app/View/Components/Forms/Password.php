<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Password extends Component
{
    /**
     * Create the component instance.
     */
    public function __construct(
        public string $name,
        public ?string $label,
        public ?array $class = null,      
        public ?string $value = null,
        public ?string $default = null,
        public ?string $required = null,
        public ?string $disabled = null,
        public ?bool $autoforcus = false,  
    ) {}
 
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.password');
    }
}
