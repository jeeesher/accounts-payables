<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Particular extends Model
{
    use HasFactory;

    protected $table = 'particular';
    protected $primarykey = 'ID';

    public function payable()
    {
        return $this->belongsTo(Payable::class, 'BUR', 'BUR');
    }
}
