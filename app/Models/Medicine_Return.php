<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class medicine_return extends Model
{
    protected $table = 'medicine_return';

    protected $fillable = [
        'Medicine_Name',
        'Batch_Number',
        'Quantity',
        'Customer',
        'Condition_Of_Medicine',
        'Reason_for_Return',
        'status',
        'Type',
    ];
}