<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Edit Payable')]

class PayablesEdit extends Component
{
    public function render()
    {
        return view('livewire.accounting.payables-edit');
    }
}
