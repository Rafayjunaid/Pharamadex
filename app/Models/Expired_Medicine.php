<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expired_Medicine extends Model
{
    protected $table = 'expired_medicines';

    protected $fillable = [
        'Medicine_Name',
        'Quantity',
        'Expiry_Date',
        'Date_Discovered',
        'Notes',
        'status',
        'Type',
    ];
}
