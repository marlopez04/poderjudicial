<?php

use Illuminate\Database\Seeder;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

    	for ($i = 1; $i <= 10; $i++) {
        DB::table('noticias')->insert([
			'titulo'      => "Titulo Noticia '+$i'",
			'id_user'		=> '1',
			'jerarquia'     => 'juez',
			'importancia'          => 'baja',
			'descripcion'   => "Descripcion de la wea '+$i'",

			]);
        }

    }
}
