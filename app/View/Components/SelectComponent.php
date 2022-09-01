<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SelectComponent extends Component
{
    public $name;
    public $placeholder;
    public $values;
    public $keys;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $name, $placeholder, $values, $keys)
    {
        $this->name =$name ;
        $this->placeholder =$placeholder;
        $this->values =$values;
        $this->keys =$keys;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.select-component');
    }
}
