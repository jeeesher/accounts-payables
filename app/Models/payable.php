<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Track;

class Payable extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'payables';

    protected $fillable = [
        'BUR',
        'SupplierName',
        'EndUser',
        'Amount',
        'TermsPayment'
    ];

    public function trackings()
    {
        return $this->hasMany(Track::class, 'BUR', 'BUR');
    }

    public function latestTracking()
    {
        return $this->hasOne(Track::class, 'BUR', 'BUR')->latest('created_at');
    }

    public function latestParticular()
    {
        return $this->hasOne(Particular::class, 'BUR', 'BUR')->latest('created_at');
    }
}
