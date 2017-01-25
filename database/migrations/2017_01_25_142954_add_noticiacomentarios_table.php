<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNoticiacomentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticiacomentarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->integer('noticia_id')->unsigned();
            $table->foreign('noticia_id')->references('id')->on('noticias');
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
        Schema::drop('noticiacomentarios');
    }
}
