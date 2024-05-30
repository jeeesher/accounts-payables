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
        Schema::table('related_tables', function (Blueprint $table) {
            Schema::table('particular', function (Blueprint $table) {
                $table->string('BUR', 30)->change(); // Update to new length
            });
    
            Schema::table('tracking', function (Blueprint $table) {
                $table->string('BUR', 30)->change(); // Update to new length
            });
    
            Schema::table('disbursement', function (Blueprint $table) {
                $table->string('BUR', 30)->change(); // Update to new length
            });
    
            Schema::table('ap_files', function (Blueprint $table) {
                $table->string('BUR', 30)->change(); // Update to new length
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('related_tables', function (Blueprint $table) {
            Schema::table('particular', function (Blueprint $table) {
                $table->string('BUR', 13)->change(); // Revert back to original length
            });
    
            Schema::table('tracking', function (Blueprint $table) {
                $table->string('BUR', 13)->change(); // Revert back to original length
            });
    
            Schema::table('disbursement', function (Blueprint $table) {
                $table->string('BUR', 13)->change(); // Revert back to original length
            });
    
            Schema::table('ap_files', function (Blueprint $table) {
                $table->string('BUR', 13)->change(); // Revert back to original length
            });
        });
    }
};
