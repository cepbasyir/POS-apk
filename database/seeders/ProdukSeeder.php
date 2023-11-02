<?php

namespace Database\Seeders;

use App\Models\Produk;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i <= 10; $i++) {
            $produk = new Produk;

            $produk->nama_produk = $faker->word;
            $produk->supliyer = $faker->name;
            $produk->harga_beli = $faker->numberBetween(1000, 10000);
            $produk->harga_jual = $faker->numberBetween(10000, 20000);
            $produk->stok = $faker->numberBetween(1, 50);

            $produk->save();
        }
    }
}
