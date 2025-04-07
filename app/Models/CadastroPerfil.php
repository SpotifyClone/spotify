<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CadastroPerfil extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = [
        'usuario',
        'nome',
        'sobrenome',
        'telefone',
        'data_nascimento',
        'email',
        'password'
    ];

    public $timestamps = true;
}
