<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Payable;
use Livewire\WithPagination;
use App\Models\Particular;
use App\Models\Track;
use Illuminate\Support\Facades\DB;

#[Title('Tracking')]

class Tracking extends Component
{
    use WithPagination;

    public function render()
    {  

        $payables = Payable::select('payables.*', 'tracking.*', 'particular.*')
                ->join('tracking', 'tracking.BUR', '=', 'payables.BUR')
                ->joinSub(function($query) {
                    $query->select('BUR', DB::raw('MIN(id) as min_id'))
                        ->from('tracking')
                        ->groupBy('BUR');
                }, 'unique_tracking', function($join) {
                    $join->on('tracking.BUR', '=', 'unique_tracking.BUR')
                        ->on('tracking.id', '=', 'unique_tracking.min_id');
                })
                ->join('particular', 'particular.BUR', '=', 'payables.BUR')
                ->joinSub(function($query) {
                    $query->select('BUR', DB::raw('MIN(id) as min_id'))
                        ->from('particular')
                        ->groupBy('BUR');
                }, 'unique_particular', function($join) {
                    $join->on('particular.BUR', '=', 'unique_particular.BUR')
                        ->on('particular.id', '=', 'unique_particular.min_id');
                })
            ->orderBy('payables.created_at', 'desc')
            ->get();


        return view('livewire.accounting.tracking', compact('payables'));
    }
}
