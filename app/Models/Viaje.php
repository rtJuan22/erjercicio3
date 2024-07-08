<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    use HasFactory;
    // Relacion uno a muchos
    public function viajeros(){
        return $this->hasMany('App\Models\Viajero');
    }
    // Relacion uno a muchos
    public function origens(){
        return $this->hasMany('App\Models\Origen');
    }

    // Relacion uno a muchos
    public function destinos(){
        return $this->hasMany('App\Models\Destino');
    }
}
