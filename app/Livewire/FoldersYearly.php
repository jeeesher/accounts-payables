<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Folders')]

class FoldersYearly extends Component
{
    public $folderName;
    public $folderUrl; 

    public function mount($folder_name) 
    {
        $this->folderName = $folder_name;
        $this->folderUrl = route('folders.yearly', ['folder_name' => $folder_name]);
    }    
    
    public function render()
    {
        return view('livewire.accounting.folders-yearly');
    }
}
