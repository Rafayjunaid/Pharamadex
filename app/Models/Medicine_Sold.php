<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class medicine_sold extends Model
{
    protected $table = 'medicine_sold';

    protected $fillable = [
        'Medicine_Name',
        'Batch_Number',
        'Customer_Name',
        'Quantity_Sold',
        'status',
        'Type',
    ];
}