<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disbursement extends Model
{
    use HasFactory;    
    protected $table = 'disbursement';
    protected $primaryKey = 'No';
    public $incrementing = false;

    protected $fillable = [
        'No', 'Payee',
        'Address', 'Date',
        'TIN', 'RCOffice',
        'ModePayment', 'BUR',
        'RCCode', 'Certified',
        'CertifiedBy', 'CertifiedPosition',
        'Approved', 'ApprovedBy',
        'ApprovedPosition', 'CheckNo',
        'CheckDate', 'BankName',
        'CheckName', 'JEVNo',
        'JEVDate', 'ORNo'
    ];
}
