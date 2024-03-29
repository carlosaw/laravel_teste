<?php

namespace App\Models;

use App\Models\Client;
use App\Models\Vehicle;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'phone',
        'percentage',
    ];
}
