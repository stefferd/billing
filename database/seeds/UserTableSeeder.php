<?php
namespace App;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		User::create([
			'name' => 'Stef van den Berg',
			'email' => 'stef@dexperts.nl',
			'password' => Hash::make('test')
		]);
	}

}
