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
        Schema::table('payables', function (Blueprint $table) {
            Schema::table('payables', function (Blueprint $table) {
                $table->string('BUR', 30)->change(); // Update to new length
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('payables', function (Blueprint $table) {
            Schema::table('payables', function (Blueprint $table) {
                $table->string('BUR', 13)->change(); // Revert back to original length
            });
        });
    }
};
