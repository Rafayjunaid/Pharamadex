<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $table = 'medicines';

    protected $fillable = [
        'Medicine_Name',
        'Batch_Number',
        'Quantity',
        'Expiry_Date',
        'Type',
    ];

    protected $casts = [
        'Expiry_Date' => 'date',
    ];
}