<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Payable;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'suppliers';

    public function payable()
    {
        return $this->hasMany(Payable::class, 'SupplierName', 'SupplierName');
    }
}
