<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('descripcion');
            $table->date('fecha_fin');
            $table->date('fecha_terminado');
            $table->integer('user_creador')->unsigned();
            $table->foreign('user_creador')->references('id')->on('users');
            $table->integer('user_pedidopor')->unsigned();
            $table->foreign('user_pedidopor')->references('id')->on('users');
            $table->enum('jerarquia',['pichon', 'pro-secretario', 'secretario', 'juez', 'jebus'])->default('pichon');
            $table->enum('importancia',['baja', 'media', 'alta'])->default('baja');
            $table->enum('estado',['pendiente', 'frenado', 'terminado'])->default('pendiente');
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
        Schema::drop('tareas');
    }
}
