<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Payable;
use App\Models\Particular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

#[Title('Payable View')]

class PayablesView extends Component
{
    public $payable;
    public $folderPayable;
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
                $this->folderPayable = DB::table('ap_files')->where('BUR', $payableBUR)->first();
            }
        } else {
            $this->error = true;
        }
    }

    public function render()
    {
        return view('livewire.accounting.payables-view', [
            'folderPayable' => $this->folderPayable,
        ]);
    }
}
