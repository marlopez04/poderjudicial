<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('descripcion');
            $table->integer('user_creador')->unsigned();
            $table->foreign('user_creador')->references('id')->on('users');
            $table->integer('user_pedidopor')->unsigned();
            $table->foreign('user_pedidopor')->references('id')->on('users');
            $table->enum('jerarquia',['pichon', 'pro-secretario', 'secretario', 'juez', 'jebus'])->default('pichon');
            $table->enum('importancia',['baja', 'media', 'alta'])->default('baja');
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
        Schema::drop('noticias');
    }
}
