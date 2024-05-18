<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Payable View')]

class BtPayablesView extends Component
{
    public function render()
    {
        return view('livewire.offices.bt-payables-view');
    }
}
