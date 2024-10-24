<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('postagems', function (Blueprint $table) {
            $table->id();
            $table->string('titulo-subtitulo');
            $table->date('data');
            $table->text('postagem');
            $table->string('contato');
            $table->boolean('ativo');
            $table->timestamps();
            $table->unsignedBigInteger('id_autor');
            $table->foreign('id_autor')->references('id')
                ->on('autors')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postagems');
    }
};
