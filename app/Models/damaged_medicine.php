<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class damaged_medicine extends Model
{
    protected $table = 'damaged_medicine';

    protected $fillable = [
        'Medicine_Name',
        'Batch_Number',
        'Quantity_Damaged',
        'Reason_for_Damage',
        'status',
        'Type',
    ];
}
