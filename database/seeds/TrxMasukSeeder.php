<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class TrxMasukSeeder extends Seeder
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
            DB::table('trx_masuk')->insert([
                'no_transaksi'      => 'Trx-'.$i,
                'koordinator_id'    => $faker->numberBetween(1, 10),
                'donatur_id'        => $faker->numberBetween(1, 10),
                'donasi_id'         => $faker->numberBetween(1, 10),
                'jumlah'            => $faker->numberBetween(10000, 1000000),
                'tgl_transaksi'     => $faker->dateTimeBetween($startDate = '-9 years', $endDate = 'now', $timezone = null),
                'send_notif'        => 'NO'
            ]);
        }
    }
}
