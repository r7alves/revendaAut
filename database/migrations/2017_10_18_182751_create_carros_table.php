<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('descricao');
            $table->integer('ano');
            $table->decimal('valor', 8,2);
            $table->integer('marca_id');
            $table->foreign('marca_id')
                ->references('id')
                ->on('marcas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carros', function (Blueprint $table) {
            $table->dropForeign('carros_marca_id_foreign');
            $table->dropColumn('marca_id');
        });
        Schema::dropIfExists('carros');
    }
}
