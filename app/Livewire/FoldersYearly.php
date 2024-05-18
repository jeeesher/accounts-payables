<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Folders')]

class FoldersYearly extends Component
{
    public function render()
    {
        return view('livewire.accounting.folders-yearly');
    }
}
