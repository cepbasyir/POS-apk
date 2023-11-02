<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id(); // Kolom id sebagai primary key
            $table->string('nama_produk'); // Kolom nama_produk dengan tipe varchar
            $table->string('supliyer')->nullable(); // Kolom supliyer dengan tipe varchar
            $table->integer('harga_beli'); // Kolom harga_beli dengan tipe int
            $table->integer('harga_jual'); // Kolom harga_jual dengan tipe int
            $table->integer('stok'); // Kolom stok dengan tipe int
            $table->timestamps(); // Kolom created_at dan updated_at

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
}
