<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicarPost extends Model{
    use HasFactory;
    
    protected $table = 'publicar_post';
    
    protected $fillable = ['nome', 'musica_podcast', 'tempo'];

    public $timestamps = false;

}