<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cardiologia extends Model
{
    use HasFactory;
    protected $table = 'cardiologia';
    protected $fillable = ['id', 'derivacion_id', 'frecuencia_cardiaca', 'presion_arterial'];
}
