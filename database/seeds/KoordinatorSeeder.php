<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class KoordinatorSeeder extends Seeder
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
            DB::table('koordinator')->insert([
                'nama'          => $faker->name,
                'alamat'        => $faker->address,
                'telpon'        => $faker->phoneNumber,
                'tgl_masuk'     => $faker->dateTimeBetween($startDate = '-9 years', $endDate = 'now', $timezone = null),
                'no_anggota'    => $faker->numberBetween(1000, 10000),
                'kantor_id'     => $faker->numberBetween(1, 10)
            ]);
        }
    }
}
