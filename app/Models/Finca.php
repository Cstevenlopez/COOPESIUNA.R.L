<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finca extends Model
{
    use HasFactory;
    protected $table='fincas';
    protected $fillable=[
        'id_finca',
        'nombre',
        'legalidad',
        'comunidad',
        'municipio',
        'departamento',
        'pais',
        'disponibilidad_energia',
        'disponibilidad_agua'
    ];
}
