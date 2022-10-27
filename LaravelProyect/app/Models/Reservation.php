<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'ciudad',
        'num_cuarto',
        'num_personas',
        'fecha_llegada',
        'fecha_salida',
    ];

    public function client(){
        return $this->BelongsTo(Client::class);
    }
}

