<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Disbursement Voucher')]

class AccountingGenerateDv extends Component
{
    public function render()
    {
        return view('livewire.accounting.accounting-generate-dv');
    }
}
