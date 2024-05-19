<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Payable;
use Illuminate\Http\Request;
use App\Models\Disbursement;

#[Title('Disbursement Voucher')]

class AccountingDvView extends Component
{
    public $payable;
    public $disbursement;

    public function mount(Request $request)
    {
        $payableBUR = $request->query('payable');

        $this->payable = Payable::with(['particulars', 'supplier', 'disbursement'])->where('BUR', $payableBUR)->first();

        $this->disbursement = Disbursement::where('BUR', $payableBUR)->first();
    }
    public function render()
    {
        return view('livewire.accounting.accounting-dv-view');
    }
}
