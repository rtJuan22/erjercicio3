<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Origen extends Model
{
    use HasFactory;
    // Relacion uno a muchos (inversa)
    public function viaje(){
        return $this->belongsTo('App\Models\Viaje');
    }
}
