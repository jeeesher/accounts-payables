<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Payable;
use Illuminate\Support\Facades\DB;

class Payables extends Component
{   

    public function render()
    {
        $payables = Payable::select('payables.*', 'tracking.*', 'particular.*')
                ->join('tracking', 'tracking.BUR', '=', 'payables.BUR')
                ->joinSub(function($query) {
                    $query->select('BUR', DB::raw('MAX(created_at) as latest_created_at'))
                        ->from('tracking')
                        ->groupBy('BUR');
                }, 'latest_tracking', function($join) {
                    $join->on('tracking.BUR', '=', 'latest_tracking.BUR')
                        ->on('tracking.created_at', '=', 'latest_tracking.latest_created_at');
                })
                ->join('particular', 'particular.BUR', '=', 'payables.BUR')
                ->joinSub(function($query) {
                    $query->select('BUR', DB::raw('MAX(created_at) as latest_created_at'))
                        ->from('particular')
                        ->groupBy('BUR');
                }, 'latest_particular', function($join) {
                    $join->on('particular.BUR', '=', 'latest_particular.BUR')
                        ->on('particular.created_at', '=', 'latest_particular.latest_created_at');
                })
            ->orderBy('payables.created_at', 'desc')
            ->get();


        return view('livewire.accounting.payables', compact('payables'));
    }
}
