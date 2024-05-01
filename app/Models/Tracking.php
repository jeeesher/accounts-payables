<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    use HasFactory;

    protected $table = 'tracking';

    // Mass Assignment for automatic insertion of data into the database
    protected $fillable = ['BUR', 'CurrentLocation', 'CurrentStatus', 'CurrentDate', 'CurrentTime']; 

}
