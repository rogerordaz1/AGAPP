<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\View\Component;


class CardCountRow extends Component
{
  
    public $countUser;


    public function __construct()
    {
        $this->countUser = User::all()->count();
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card-count-row');
    }
}
