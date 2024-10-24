<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Derivaciones extends Model
{
    use HasFactory;
    protected $table = 'derivaciones';
    protected $fillable = ['id', 'cedula', 'estatura', 'peso', 'presion', 'presion_ari'];
}
