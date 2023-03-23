<?php

namespace App\Models;

use App\Models\Client;
use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'plate',
        'brand',
        'model',
        'color',
        'year',
        'km'
    ];

    // Um Veículo sempre vai pertencer a um Cliente
    public function client() {
        return $this->belongsTo(Client::class);
    }

    //Um Veículo pode ter vários Produtos
    public function product() {
        return $this->hasMany(Product::class);
    }

    public $timestamps = false;
}
