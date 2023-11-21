<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cardapio_id');
            $table->unsignedBigInteger('availability_id');
            $table->string('nome_aniversariante');
            $table->integer('idade_aniversario');
            $table->integer('quantidade_convidados');
            $table->timestamps();

            $table->foreign('cardapio_id')->references('id')->on('cardapio');
            $table->foreign('availability_id')->references('id')->on('availability');
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservas');
    }
};

