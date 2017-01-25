<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNotificacionrespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificacionrespuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->integer('notificacion_id')->unsigned();
            $table->foreign('notificacion_id')->references('id')->on('notificaciones');
            $table->integer('user_creador')->unsigned();
            $table->foreign('user_creador')->references('id')->on('users');
            $table->enum('jerarquia',['pichon', 'pro-secretario', 'secretario', 'juez', 'jebus'])->default('pichon');
            $table->enum('estado',['enviado', 'leido'])->default('enviado');
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
        Schema::drop('notificacionrespuestas');
    }
}
