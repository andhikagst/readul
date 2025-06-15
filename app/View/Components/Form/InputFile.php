<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputFile extends Component
{
    public $label;
    public $name;

    public function __construct($label = '', $name = '')
    {
        $this->label =$label;
        $this->name =$name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input-file');
    }
}
