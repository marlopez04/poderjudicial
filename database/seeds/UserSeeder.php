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
			'name'          => 'martin',
			'email'         => 'marlopez04@hotmail.com',
			'password'      => bcrypt('12345'),
			'type'          => 'admin',
			'jerarquia'     => 'jebus'
			]);

        DB::table('users')->insert([
			'name'          => 'miguel',
			'email'         => 'miguelxl26@gmail.com',
			'password'      => bcrypt('12345'),
			'type'          => 'admin',
			'jerarquia'     => 'jebus'
			]);

        DB::table('users')->insert([
			'name'          => 'nahuel',
			'email'         => 'anahuelg@gmail.com',
			'password'      => bcrypt('12345'),
			'type'          => 'admin',
			'jerarquia'     => 'jebus'
			]);
    }
}
