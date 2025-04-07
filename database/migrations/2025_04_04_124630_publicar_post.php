<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::create('publicar_post', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->string('musica_podcast');
        $table->integer('tempo');
        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('publicar_post');
    }
};
