<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class input extends Component
{

    public $icon;
    public $iconPosition;
    public $type;
    public $name;
    public $placeholder;
    public $size;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $name, $placeholder, $size, $icon = "", $iconPosition = "")
    {
        $this->icon = $icon;
        $this->iconPosition = $iconPosition;
        $this->type = $type;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.input');
    }
}
