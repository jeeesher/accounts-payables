<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCurrentLocationEnumInTrackingTable extends Migration
{
    public function up()
    {
        Schema::table('tracking', function (Blueprint $table) {
            $table->enum('CurrentLocation', [
                'Accounting', 
                'Treasurer', 
                'Budgeting', 
                'OVPF', 
                'Property', 
                'COA'
            ])->change();
        });
    }

    public function down()
    {
        Schema::table('tracking', function (Blueprint $table) {
            $table->enum('CurrentLocation', [
                'Procurement', 
                'Accounting', 
                'Treasurer', 
                'Budgeting', 
                'OVPF', 
                'Property'
            ])->change();
        });
    }
}
