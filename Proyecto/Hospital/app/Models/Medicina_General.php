<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicina_General extends Model
{
    use HasFactory;
    protected $table = 'medicina_general';
    protected $fillable = ['id', 'derivacion_id'];
}
