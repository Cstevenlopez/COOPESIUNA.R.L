<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uso_de_tierra extends Model
{
    use HasFactory;

    public function finca(){
        return $this->belongsTo(finca::class, 'finca_id');
    }
}
