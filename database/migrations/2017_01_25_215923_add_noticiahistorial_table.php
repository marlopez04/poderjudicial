<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNoticiahistorialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticiahistorial', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('noticia_id')->unsigned();
            $table->foreign('noticia_id')->references('id')->on('noticia');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->enum('jerarquia',['pichon', 'pro-secretario', 'secretario', 'juez', 'jebus'])->default('pichon');
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
        Schema::drop('noticiahistorial');
    }
}