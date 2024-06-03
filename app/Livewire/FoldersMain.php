<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Folders')]

class FoldersMain extends Component
{
    public $ap_folders;
    
    public function render()
    {
        return view('livewire.accounting.folders-main');
    }
}
