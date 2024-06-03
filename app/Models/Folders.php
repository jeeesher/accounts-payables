<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folders extends Model
{
    use HasFactory;

    protected $table = 'ap_folders';
    protected $fillable = [
        'folder_name'
    ];

    public function payable()
    {
        return $this->belongsTo(Payable::class, 'BUR', 'BUR');
    }   
}
