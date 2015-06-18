<?php


class UserTableSeeder extends Seeder {

	public function run()
	{
		User::create([
			'first_name' => 'Erick Iván',
			'last_name'  => 'Juárez Enciso',
			'username'   => 'indierick',
			'email'      => 'juarez.erick92@gmail.com',
			'password'   => 'admin'
			//'password'   =>  Hash::make('admin')
			]);
		}

	}
