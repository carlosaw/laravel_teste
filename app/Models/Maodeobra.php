<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maodeobra extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'percentage',
        'mechanic_id'
    ];

    // Um Veículo sempre vai pertencer a um Cliente
    public function mechanic() {
        return $this->hasMany(Mechanic::class);
    }
}
