<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AddTrack extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    public $custom_date = '2024-01-01';

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.add-track');
    }
}
