<?php

namespace App\Listeners;

use App\Events\LocationChanged;
use App\Models\CustomNotification;
use App\Notifications\TrackingLocation;
use CreateCustomNotificationsTable;
use Illuminate\Support\Facades\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LocationChangeNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        
    }

    /**
     * Handle the event.
     */
    public function handle(LocationChanged $event)
    {
        CustomNotification::create([
            'BUR' => $event->data->BUR,
            'CurrentLocation' => $event->data->CurrentLocation,
            'message' => "BUR '{$event->data->BUR}' has changed its location to {$event->data->CurrentLocation}.",
        ]);
    }
}