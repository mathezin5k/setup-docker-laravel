<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->integer('cardapio_id')->unsigned();
            $table->unsignedBigInteger('availability_id');
            $table->string('birthday_person');
            $table->integer('age');
            $table->integer('estimated_guests');
            $table->boolean('status')->default(false);
            $table->timestamps();
    
            $table->foreign('cardapio_id')->references('id')->on('cardapio');
            $table->foreign('availability_id')->references('id')->on('availability');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
