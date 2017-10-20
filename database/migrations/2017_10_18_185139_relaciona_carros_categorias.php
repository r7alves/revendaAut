<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelacionaCarrosCategorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carro_categoria', function (Blueprint $table) {
            $table->integer('carro_id');
            $table->foreign('carro_id')
                ->references('id')
                ->on('carros')
                ->onDelete('cascade');
            $table->integer('categoria_id');
            $table->foreign('categoria_id')
                ->references('id')
                ->on('categorias')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carro_categoria');
    }
}
