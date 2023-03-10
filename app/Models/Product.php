<?php

namespace App\Models;

//use App\Models\Vehicle;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'value_unit',
        'quantity',
        'discount',
        'total'
    ];

    public $timestamps = false;

}
