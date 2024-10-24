<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odontologia extends Model
{
    use HasFactory;
    protected $table = 'odontologia';
    protected $fillable = ['id', 'derivacion_id', 'campo_1', 'campo_2'];

}
