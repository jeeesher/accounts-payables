<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('files', function (Blueprint $table) {
            $table->string('BUR', 11)->primary();
            $table->foreign('BUR')->references('BUR')->on('payables')->onDelete('cascade')->onUpdate('cascade');
            $table->string('IAR_File')->nullable(); 
            $table->string('SRIDE_File')->nullable();
            $table->string('RIS_File')->nullable(); 
            $table->string('DR_File')->nullable(); 
            $table->string('SI_File')->nullable(); 
            $table->string('CRPO_File')->nullable(); 
            $table->string('BUR_File')->nullable(); 
            $table->string('Cheque_File')->nullable(); 
            $table->string('DV_File')->nullable(); 
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
