<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Payable;

class Particular extends Model
{
    use HasFactory;

    protected $table = 'particular';
    protected $primaryKey = 'ID';

    protected $fillable = [
        'BUR', 'ParticularDesc', 'ParticularAmount'
    ];

    public function payable()
    {
        return $this->belongsTo(Payable::class, 'BUR', 'BUR');
    }
}
