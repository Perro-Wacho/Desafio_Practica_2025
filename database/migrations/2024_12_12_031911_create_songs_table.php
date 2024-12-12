<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id(); // ID único
            $table->string('title'); // Título de la canción
            $table->foreignId('album_id')->constrained('albums')->onDelete('cascade'); // Relación con álbum
            $table->string('duration'); // Duración de la canción
            $table->string('cover')->nullable(); // Ruta de la carátula (opcional)
            $table->string('file'); // Ruta del archivo MP3
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
}
