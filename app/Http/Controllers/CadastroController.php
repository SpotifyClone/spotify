<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CadastroPerfil;
use Illuminate\Support\Facades\Hash;

class CadastroController extends Controller
{
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'usuario' => 'required|string|max:255|unique:usuarios,usuario',
            'nome' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
            'telefone' => 'required|string|max:20',
            'data_nascimento' => 'required|date',
            'email' => 'required|string|email|max:255|unique:usuarios,email',
            'password' => 'required|string|min:6'
        ]);

        $usuario = CadastroPerfil::create([
            'usuario' => $validateData['usuario'],
            'nome' => $validateData['nome'],
            'sobrenome' => $validateData['sobrenome'],
            'telefone' => $validateData['telefone'],
            'data_nascimento' => $validateData['data_nascimento'],
            'email' => $validateData['email'],
            'password' => Hash::make($validateData['password'])
        ]);

        return redirect()->back()->with('sucesso', 'Cadastro realizado com sucesso');
    }
}
