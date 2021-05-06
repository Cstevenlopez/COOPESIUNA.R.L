<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Requests\AccesoRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegistroRequest;
use Illuminate\Validation\ValidationException;

class UsuarioController extends Controller
{
    public function registro(RegistroRequest $request)
    {
        $usuario = new Usuario();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = bcrypt($request->password);
        $usuario->save();

        return response()->json([
            'res' => true,
            'msg' => 'Usuario registrado correctamente'
        ],200);

    }
    public function acceso(AccesoRequest $request)
    {
        $usuario = Usuario::where('email', $request->email)->first();

        if (! $usuario || ! Hash::check($request->password, $usuario->password)) {
            throw ValidationException::withMessages([
                'msg' => ['Las credenciales son incorrectas.'],
            ]);
        }
    
        $token = $usuario->createToken($request->email)->plainTextToken;

        return response()->json([
                'res' => true,
                'token' => $token
        ]);
    }
}
