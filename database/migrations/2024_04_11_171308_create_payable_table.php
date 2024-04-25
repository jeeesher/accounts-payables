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
        Schema::create('payable', function (Blueprint $table) {
            // payable information
            $table->string('BUR');
            $table->string('SupplierName');
            $table->string('EndUser');
            $table->string('Amount');
            $table->string('CurrentLocation');
            $table->string('TermsPayment');
            $table->string('Remarks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payable');
    }
};
