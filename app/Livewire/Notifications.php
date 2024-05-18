<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Notifications')]

class Notifications extends Component
{
    public function render()
    {
        return view('livewire.notifications');
    }
}
