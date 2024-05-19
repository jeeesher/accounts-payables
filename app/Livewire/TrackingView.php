<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Payable;
use Illuminate\Http\Request;

#[Title('Tracking View')]

class TrackingView extends Component
{
    public $payable;
    public $tracking;
    public function mount(Request $request)
    {
        $payableBUR = $request->query('payable');

        $this->payable = Payable::with(['particulars', 'supplier', 'latestTracking', 'trackings' => function ($query) {
            $query->orderBy('created_at', 'desc');
        }])->where('BUR', $payableBUR)->first();
    }
    public function render()
    {
        return view('livewire.tracking-view');
    }
}
