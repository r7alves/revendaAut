<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissoes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('descricao')->nullable();
            $table->timestamps();
        });

        Schema::create('papel_permissao', function (Blueprint $table) {
            $table->integer('papel_id');
            $table->foreign('papel_id')
            ->references('id')
            ->on('papeis')
            ->onDelete('cascade');
            
            $table->integer('permissao_id');
            $table->foreign('permissao_id')
            ->references('id')
            ->on('permissoes')
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
        Schema::dropIfExists('papel_permissao');
        Schema::dropIfExists('permissoes');
    }
}
