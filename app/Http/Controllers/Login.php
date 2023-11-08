<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    public function login()
    {
        return view('site.principal');
    }

    public function outroMetodo(Request $request)
    {
        // Lógica do método
        return response()->json(['mensagem' => 'Sucesso']);
    }
}
