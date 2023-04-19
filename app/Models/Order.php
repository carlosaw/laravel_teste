<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'client_id',
        'product_id',
        'vehicle_id',
        'mechanic_id',
        'due_date'
    ];

    // Uma OS sempre vai pertencer a um Cliente
    public function client() {
        return $this->belongsTo(Client::class);
    }

    // Uma OS pode ter vários Produtos
    public function product() {
        return $this->hasMany(Product::class);
    }

    // Uma OS só pode ter um veículo
    public function vehicle() {
        return $this->belongsTo(Vehicle::class);
    }
    // Um Mecânico pode estar em várias OS
    public function mechanic() {
        return $this->hasMany(Mechanic::class);
    }
}
