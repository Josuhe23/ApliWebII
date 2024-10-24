<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table = 'persona';
    protected $fillable = ['cedula', 'cedula', 'apellido', 
    'nombre', 'direccion', 'telefono', 'correo_elec', 'nacimiento',
    'diagnostico'];
}
