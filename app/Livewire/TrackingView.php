<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Tracking View')]

class TrackingView extends Component
{
    public function render()
    {
        return view('livewire.tracking-view');
    }
}
