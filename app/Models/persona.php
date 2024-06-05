<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;
    public function vehiculos (){
        return $this->belongsToMany('App\Models\Vehiculo');
    }
    public function accidentes (){
        return $this->hasMany('App\Models\Accidente');
    }
}
