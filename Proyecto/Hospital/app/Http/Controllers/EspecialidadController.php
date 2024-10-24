<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EspecialidadController extends Controller
{
    public function index()
    {
        $especialidad = Especialidad::all();

        return response()->json([
            'especialidad' => $especialidad
        ]);
    }
}
