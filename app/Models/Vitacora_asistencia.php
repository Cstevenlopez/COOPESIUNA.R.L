<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vitacora_asistencia extends Model
{
    use HasFactory;
    protected $table='vitacora_asistencias';
    protected $fillable=[
        'id_vitacora',
        'actividad',
        'objetivo',
        'temas_abordados',
        'dificultades',
        'soluciones',
        'recomendaciones',
        'fecha',
        'siguiente_visita',
        'productorid',
        'usuario_id'
    ];

    //Relacion uno a mucho (inversa)
    // public function user(){
    //     return $this->belongsTo('App/Models/User');
    // }

    // public function productor(){
    //     return $this->belongsTo('App/Models/Productor');
    // }

}
