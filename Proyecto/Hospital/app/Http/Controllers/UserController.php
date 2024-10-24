<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();

        return response()->json([
            'user' => $user
        ]);
    }
}
