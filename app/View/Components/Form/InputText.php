<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputText extends Component
{
    public $type;
    public $id;
    public $label;
    public $name;
    public $ph;
    public $value;

    public function __construct($type = '', $id = '', $label = '', $name = '', $ph = '', $value = '')
    {
        $this->type =$type;
        $this->id =$id;
        $this->label =$label;
        $this->name =$name;
        $this->ph =$ph;
        $this->value =$value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input-text');
    }
}
