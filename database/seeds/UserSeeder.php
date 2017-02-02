<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
			'username'      => 'martin',
			'nombre'        => 'Martin Lopez',
			'email'         => 'marlopez04@hotmail.com',
			'password'      => bcrypt('12345'),
			'type'          => 'admin',
			'jerarquia'     => 'jebus'
			]);

        DB::table('users')->insert([
			'username'      => 'miguel',
			'nombre'        => 'Miguel Donadio',
			'email'         => 'miguelxl26@gmail.com',
			'password'      => bcrypt('12345'),
			'type'          => 'admin',
			'jerarquia'     => 'jebus'
			]);

        DB::table('users')->insert([
			'username'      => 'nahuel',
			'nombre'        => 'Nahuel Gomez',
			'email'         => 'anahuelg@gmail.com',
			'password'      => bcrypt('12345'),
			'type'          => 'admin',
			'jerarquia'     => 'jebus'
			]);
    }
}
