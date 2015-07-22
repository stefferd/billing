<?php
namespace App;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class CompanyTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Company::create([
			'name' => 'Dexperts',
			'address' => 'Adamskamp 10',
			'zipcode' => '6576 EG',
			'registration' => '62612433',
			'tax' => 'NL165102767B02',
			'user_id' => 1
		]);
	}

}
