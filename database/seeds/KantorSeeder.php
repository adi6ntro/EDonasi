<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class KantorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 10; $i++) { 
            DB::table('kantor')->insert([
                'nama'      => $faker->name,
                'alamat'   => $faker->address
            ]);
        }
    }
}
