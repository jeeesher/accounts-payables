<?php

namespace App\Observers;

use App\Models\Payable;
use App\Models\Tracking;

class PayableObserver
{
    public function created(Payable $payable)
    {
        Tracking::create([
            'BUR' => $payable->BUR,
            'CurrentLocation' => 'Accounting', // Initial Location
            'CurrentStatus' => 'Payable is created', // Initial Status
            'CurrentDate' => now()->toDateString(),  
            'CurrentTime' => now(),     
        ]);
    }
}
