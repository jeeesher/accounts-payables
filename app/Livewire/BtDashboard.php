<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Dashboard')]

class BtDashboard extends Component
{
    public function render()
    {
        return view('livewire.offices.bt-dashboard');
    }
}
