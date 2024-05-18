<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Supplier;
use App\Models\Payable;
use Illuminate\Http\Request;

#[Title('Edit Payable')]

class PayablesEdit extends Component
{
    public $suppliers;
    public $payable;

    public function mount(Request $request)
    {
        $payableBUR = $request->query('payable');

        $this->suppliers = Supplier::all(); // Fetch supplier name and IDs
        $this->payable = Payable::with(['particulars', 'supplier', 'latestTracking'])->where('BUR', $payableBUR)->first();
        $this->payable->load('otherParticulars', 'files');
    }

    public function render()
    {
        return view('livewire.accounting.payables-edit');
    }
}
