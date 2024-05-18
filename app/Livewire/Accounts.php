<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Accounts')]

class Accounts extends Component
{
    public function render()
    {
        return view('livewire.accounts');
    }
}
