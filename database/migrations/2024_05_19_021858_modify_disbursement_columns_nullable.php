<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyDisbursementColumnsNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('disbursement', function (Blueprint $table) {
            $table->enum('Certified', ['Supporting Documents Complete', 'Supporting Documents Incomplete', 'Missing Documents', 'Others'])->nullable()->change();
            $table->string('CertifiedBy')->nullable()->change();
            $table->string('CertifiedPosition')->nullable()->change();
            $table->enum('Approved', ['Approved', 'Not Approved'])->nullable()->change();
            $table->string('ApprovedBy')->nullable()->change();
            $table->string('ApprovedPosition')->nullable()->change();
            $table->string('CheckNo')->nullable()->change();
            $table->date('CheckDate')->nullable()->change();
            $table->string('BankName')->nullable()->change();
            $table->string('CheckName')->nullable()->change();
            $table->string('JEVNo')->nullable()->change();
            $table->string('JEVDate')->nullable()->change();
            $table->string('ORNo')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('disbursement', function (Blueprint $table) {
            $table->enum('Certified', ['Supporting Documents Complete', 'Supporting Documents Incomplete', 'Missing Documents', 'Others'])->nullable(false)->change();
            $table->string('CertifiedBy')->nullable(false)->change();
            $table->string('CertifiedPosition')->nullable(false)->change();
            $table->enum('Approved', ['Approved', 'Not Approved'])->nullable(false)->change();
            $table->string('ApprovedBy')->nullable(false)->change();
            $table->string('ApprovedPosition')->nullable(false)->change();
            $table->string('CheckNo')->nullable(false)->change();
            $table->date('CheckDate')->nullable(false)->change();
            $table->string('BankName')->nullable(false)->change();
            $table->string('CheckName')->nullable(false)->change();
            $table->string('JEVNo')->nullable(false)->change();
            $table->string('JEVDate')->nullable(false)->change();
            $table->string('ORNo')->nullable(false)->change();
        });
    }
}
