<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'suppliers';
    protected $primarykey = 'SupplierName';

    public function payables()
    {
        return $this->hasMany(Payable::class, 'SupplierName', 'SupplierName');
    }
}
