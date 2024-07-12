<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class button extends Component
{
    public $type;
    public $variation;
    public $name;
    public $size;
    public $icon;
    public $iconPosition;
    public $text;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $variation, $name, $size, $text = "", $icon = "", $iconPosition = "")
    {
        $this->type = $type;
        $this->variation = $variation;
        $this->name = $name;
        $this->size = $size;
        $this->icon = $icon;
        $this->iconPosition = $iconPosition;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.button');
    }
}
