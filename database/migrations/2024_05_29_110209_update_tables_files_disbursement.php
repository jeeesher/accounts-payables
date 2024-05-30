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
        Schema::rename('files', 'ap_files');

        Schema::table('disbursement', function (Blueprint $table) {
            $table->enum('ModePayment', ['Check', 'Cash', 'Others'])->nullable()->change();
            $table->string('TIN')->nullable()->change();
            $table->string('Address')->nullable()->change();
            $table->string('RCOffice')->nullable()->change();
            $table->string('RCCode')->nullable()->change();
            $table->enum('Certified', ['Supporting Documents Complete', 'Supporting Documents Incomplete', 'Missing Documents', 'Others'])->nullable(false)->change();
            $table->string('CertifiedBy')->nullable(false)->change();
            $table->string('CertifiedPosition')->nullable(false)->change();
            $table->string('ApprovedBy')->nullable(false)->change();
            $table->string('ApprovedPosition')->nullable(false)->change();
            $table->date('CheckDate')->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('ap_files', 'files');

        Schema::table('disbursement', function (Blueprint $table) {
            $table->enum('ModePayment', ['Check', 'Cash', 'Others'])->nullable(false)->change();
            $table->string('TIN')->nullable(false)->change();
            $table->string('Address')->nullable(false)->change();
            $table->string('RCOffice')->nullable(false)->change();
            $table->string('RCCode')->nullable(false)->change();
            $table->enum('Certified', ['Supporting Documents Complete', 'Supporting Documents Incomplete', 'Missing Documents', 'Others'])->nullable()->change();
            $table->string('CertifiedBy')->nullable()->change();
            $table->string('CertifiedPosition')->nullable()->change();
            $table->string('ApprovedBy')->nullable()->change();
            $table->string('ApprovedPosition')->nullable()->change();
            $table->date('CheckDate')->nullable()->change();
        });
    }
};
