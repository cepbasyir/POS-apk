<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaksi;
use Faker\Factory as Faker;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 10; $i++) { // Membuat 10 data dummy
            Transaksi::create([
                'total_item' => $faker->numberBetween(1, 10),
                'total_harga' => $faker->numberBetween(10000, 30000),
                'bayar' => $faker->numberBetween(10000, 500000),
            ]);
        }
    }
}
