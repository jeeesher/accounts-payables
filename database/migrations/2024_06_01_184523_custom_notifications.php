<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomNotificationsTable extends Migration
{
    public function up()
    {
        Schema::create('custom_notifications', function (Blueprint $table) {
            $table->string('BUR');
            $table->string('CurrentLocation');
            $table->string('message');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('custom_notifications');
    }
}
