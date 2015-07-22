<?php
namespace App;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class ProjectTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		$faker = Faker::create();

		foreach(range(0, 3) as $index) {
			Project::create([
				'title' => $faker->sentence(1),
				'description' => $faker->paragraph(5),
				'price' => $faker->randomFloat(),
				'rate' => $faker->randomFloat(),
				'rateType' => 1,
				'user_id' => 1,
				'company_id' => 1
			]);
		}

	}

}
