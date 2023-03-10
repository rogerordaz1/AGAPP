<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\View\Component;

class CountCard extends Component
{
   
    public $count;
    public $text;
    public $color;



    public function __construct($count,$text,$color)
    {
        $this->count = $count;
        $this->text = $text;
        $this->color = $color;
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.count-card');
    }
}
