<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Payable;

class Payables extends Component
{
    public $payables=[];

    public function mount()
    {
        $this->payables = Payable::all();
    }

    public function render()
    {
        return view('livewire.accounting.payables');
    }
}
