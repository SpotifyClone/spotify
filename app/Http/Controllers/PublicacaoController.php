<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PublicarPost;

class PublicacaoController extends Controller
{
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nome'=> 'required|string|max:255',
            'musica_podcast' => 'required|string|max:255',
            'tempo' => 'required|integer'
        ]);
        $usuario = PublicarPost::create($validateData);

        return redirect()->back()->with('sucesso', 'Post enviado com sucesso');
    }
}