<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vitacora_asistencia extends Model
{
    use HasFactory;

    //Relacion uno a mucho (inversa)
    // public function user(){
    //     return $this->belongsTo('App/Models/User');
    // }

    // public function productor(){
    //     return $this->belongsTo('App/Models/Productor');
    // }

}
