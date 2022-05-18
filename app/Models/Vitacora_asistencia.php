<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vitacora_asistencia extends Model
{
    use HasFactory;
    protected $table='vitacora_asistencias';
    protected $fillable=[
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
    public function users(){
        return $this->belongsTo(User::class, 'usuario_id');
    }

    public function productor(){
        return $this->belongsTo(Productor::class, 'productorid');
    }


}
