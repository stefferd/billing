<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('users')->insert([
            'name' => 'Stef van den Berg',
            'email' => 'stef@dexperts.nl',
            'password' => bcrypt('test'),
        ]);

        DB::table('companies')->insert([
            'name' => 'Dexperts',
            'address' => 'Adamskamp 10',
            'zipcode' => '6576 EG',
            'registration' => '62612433',
            'tax' => 'NL165102767B02',
            'user_id' => 1
        ]);

        DB::table('projects')->insert([
            'title' => 'Test project',
            'description' => 'Test project omschrijving',
            'price' => 50000.00,
            'rate' => 75.00,
            'rateType' => 1,
            'user_id' => 1,
            'company_id' => 1
        ]);

        Model::reguard();
    }
}
