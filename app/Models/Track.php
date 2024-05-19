<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Payable;

class Track extends Model
{
    use HasFactory;

    protected $table = 'tracking';
    protected $primaryKey = 'ID'; 

    // Mass Assignment for automatic insertion of data into the database
    protected $fillable = ['BUR', 'CurrentLocation', 'CurrentStatus', 'CurrentDate', 'CurrentTime']; 

    public function payable()
    {
        return $this->belongsTo(Payable::class, 'BUR', 'BUR');
    }

}
