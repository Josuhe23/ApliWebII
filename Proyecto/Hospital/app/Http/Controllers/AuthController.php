<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Controllers\UserController;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        //Validacion de los datos ingresados
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        //Buscar el usuario por correo
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }

        //Verificar si el usuario existe y la contraseña es correcta
        if (!Hash::check($request->password, $user->password)) {
            return response()->json(['error' => 'Contraseña incorrecta'], 401);
        }

        //Generar un token de acceso para el usuario
        $token = $user->createToken('auth_token')->plainTextToken;

        //Retornar el token
        return response()->json([
            'message'=> 'Inicio de sesión exitoso',
            'token' => $token,
            'user' => $user,
        ], 200);

    }
    public function logout(Request $request)
{
    // Revoca el token que se utiliza para la solicitud actual
    $request->user()->currentAccessToken()->delete();

    return response()->json([
        'message' => 'Cierre de sesión exitoso'
    ]);
}
}
