<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productor extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table='productors';
    protected $fillable=[
        'id_productor',
        'fincaid',
        'nombres',
        'apellidos',
        'numero_cedula',
        'numero_telefono',
        'comunidad',
        'municipio'
    ];

    //Relacion uno a muchos

    // public function vitacora(){
    //     return $this->hasMany('App/Models/Vitacora_asistencia');
    // }
=======
>>>>>>> 6f4c2da481f4a7047f7075798fd3bcdd3078fa50
}
