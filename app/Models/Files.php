<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    use HasFactory;

    protected $table = 'files';
    protected $primaryKey = 'BUR';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'BUR', 'IAR_File', 'SRIDE_File', 'RIS_File', 'DR_File', 'SI_File', 'CRPO_File', 'BUR_File', 'Cheque_File', 'DV_File'
    ];

    public function payable()
    {
        return $this->belongsTo(Payable::class, 'BUR', 'BUR');
    }   
}
