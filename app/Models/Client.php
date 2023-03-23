<?php

namespace App\Models;


use App\Models\Vehicle;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cpf',
        'fone',
        'email'
    ];

    // Um cliente pode ter vários endereços
    public function address() {
        return $this->hasMany(Address::class);
    }

    //Um cliente pode ter vários veículos
    public function vehicles() {
        return $this->hasMany(Vehicle::class);
    }

    public $timestamps = false;
}
