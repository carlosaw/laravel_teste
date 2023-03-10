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
        'vehicle_id',
        'client_id'
    ];

    // Um mecânico pode ter vários clientes
    public function client() {
        return $this->hasMany(Client::class);
    }

    // Um mecânico pode fazer serviços em vários veículos
    public function vehicles() {
        return $this->hasMany(Vehicle::class);
    }
}
