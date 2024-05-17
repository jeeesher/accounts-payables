<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Payable;
use App\Models\Particular;
use Illuminate\Http\Request;

class PayablesView extends Component
{
    public $payable;
    public $error = false; 

    public function mount(Request $request)
    {
        $payableBUR = $request->query('payable');
        
        if ($payableBUR) {
            $this->payable = Payable::with(['particulars', 'supplier', 'latestTracking'])->where('BUR', $payableBUR)->first();

            if (!$this->payable) {
                $this->error = true;
            } else {
                $this->payable->load('otherParticulars', 'files');
            }
        } else {
            $this->error = true;
        }
    }

    public function render()
    {
        return view('livewire.accounting.payables-view');
    }
}
