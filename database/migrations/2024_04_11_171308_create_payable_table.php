<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function down(): void
    {
        Schema::dropIfExists('payables');
        Schema::dropIfExists('particular');
        Schema::dropIfExists('suppliers');
        Schema::dropIfExists('tracking');
    }

    public function up(): void
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->string('SupplierName')->primary();
            $table->string('Address');
            $table->string('ContactNumber');
            $table->timestamps();
        });

        Schema::create('payables', function (Blueprint $table) {
            $table->string('BUR', 13)->primary()->unique();
            $table->string('SupplierName')->nullable();
            $table->foreign('SupplierName')->references('SupplierName')->on('suppliers')->onDelete('set null')->onUpdate('cascade');
            $table->string('EndUser');
            $table->float('Amount');
            $table->string('TermsPayment');
            $table->timestamps();
        });

        Schema::create('particular', function (Blueprint $table) {
            $table->unsignedInteger('ID')->autoIncrement()->change();
            $table->string('BUR', 13);
            $table->foreign('BUR')->references('BUR')->on('payables')->onDelete('cascade')->onUpdate('cascade');
            $table->string('ParticularDesc');
            $table->float('Amount');
            $table->timestamps();
        });

        Schema::create('tracking', function (Blueprint $table) {
            $table->unsignedInteger('ID')->autoIncrement()->change();
            $table->string('BUR', 13);
            $table->foreign('BUR')->references('BUR')->on('payables')->onDelete('cascade')->onUpdate('cascade');
            $table->enum('CurrentLocation', ['Procurement', 'Accounting', 'Treasurer', 'Budgeting', 'OVPF', 'Property']);
            $table->string('CurrentStatus');
            $table->date('CurrentDate');
            $table->timestamp('CurrentTime'); // pwede daw kunin via $yourModel->submitted_at = now(); sa controller end
            $table->timestamps();
        });

        Schema::create('disbursement', function (Blueprint $table) {
            $table->integer('No')->primary()->unique();
            $table->date('Date');
            $table->enum('ModePayment', ['Check', 'Cash', 'Others']);
            $table->string('Payee');
            $table->string('TIN');
            $table->string('BUR', 13);
            $table->foreign('BUR')->references('BUR')->on('payables')->onDelete('cascade')->onUpdate('cascade');
            $table->string('Address');
            $table->string('RCOffice');
            $table->string('RCCode');
            $table->enum('Certified', ['Supporting Documents Complete', 'Supporting Documents Incomplete', 'Missing Documents', 'Others']);
            $table->string('CertifiedBy');
            $table->string('CertifiedPosition');
            $table->enum('Approved', ['Approved', 'Not Approved']);
            $table->string('ApprovedBy');
            $table->string('ApprovedPosition');
            $table->string('CheckNo');
            $table->date('CheckDate');
            $table->string('BankName');
            $table->string('CheckName');
            $table->string('JEVNo');
            $table->string('JEVDate');
            $table->string('ORNo');
        });
    }
};
