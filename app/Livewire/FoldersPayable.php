<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\DB;

#[Title('Folders')]

class FoldersPayable extends Component
{
    public $ap_folders;
    public $ap_files;

    public $folderPayable;
    public $folderUrl; 

    public function mount($BUR) 
    {
        $this->folderPayable = DB::table('ap_files')->where('BUR', $BUR)->first();
        $this->folderUrl = route('folders.payable', ['BUR' => $BUR]);

        $this->ap_files = DB::table('ap_files')->where('BUR', $BUR)->get();
    }  
    public function render()
    {
        return view('livewire.accounting.folders-payable', [
            'folderPayable' => $this->folderPayable,
            'ap_files' => $this->ap_files,
        ]);
    }
}
