<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->String('nomor_induk')->unique()->nullable();
            $table->date('tgl_sebar');
            $table->date('tgl_tanam');
            $table->decimal('total_benih');
            $table->decimal('total_harga_benih');
            $table->decimal('total_harga_jasa');
            $table->decimal('total_biaya');
            $table->foreignId('lahan_pelanggan_id');
            $table->foreignId('stok_padi_id');
            $table->String('status_pesanan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanans');
    }
}
