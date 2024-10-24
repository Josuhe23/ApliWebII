<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuario';
    protected $fillable = ['cedula', 'id_dept', 'nombre', 'apellido', 'telefono', 
    'correo_elec', 'sexo', 'estado_civil', 'titulo', 'rol'];

}
