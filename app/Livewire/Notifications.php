<?php

namespace App\Livewire;

use App\Models\CustomNotification;
use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Notifications')]

class Notifications extends Component
{
    public $notifications;

    public function mount()
    {
        $this->notifications = CustomNotification::orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.notifications');
    }
}
