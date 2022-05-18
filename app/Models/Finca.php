<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finca extends Model
{
    use HasFactory;
    protected $table='fincas';
    protected $fillable=[

        'nombre',
        'legalidad',
        'comunidad',
        'municipio',
        'departamento',
        'pais',
        'disponibilidad_energia',
        'disponibilidad_agua'
    ];
    //Rlacion uno a muchos

    public function productor(){
        return $this->hasMany(Productor::class, 'id');
    }

    public function tierra(){
        return $this->hasMany(Uso_de_tierra::class, 'id');
    }
}
