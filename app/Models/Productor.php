<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productor extends Model
{
    use HasFactory;
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

}
