<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Supplier;

#[Title('Add Payable')]

class PayablesAdd extends Component
{
    public $suppliers;

    public function mount()
    {
        $this->suppliers = Supplier::all(); // Fetch supplier name and IDs
    }

    public function render()
    {
        return view('livewire.accounting.payables-add');
    }
}
