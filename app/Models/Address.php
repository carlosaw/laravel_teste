<?php

namespace App\Models;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'client_id',
        'street',
        'number',
        'cep',
        'district',
        'city',
        'state'
    ];

    // Um Endereço sempre vai pertencer a um Cliente
    public function client() {
        return $this->belongsTo(Client::class);
    }

    public $timestamps = false;
}
