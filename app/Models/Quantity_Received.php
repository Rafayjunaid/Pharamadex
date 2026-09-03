<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class quantity_received extends Model
{
    protected $table = 'quantity_received';

    protected $fillable = [
        'Medicine_Name',
        'Batch_Number',
        'Supplier',
        'Quantity_Received',
        'status',
        'Type',
    ];
}
