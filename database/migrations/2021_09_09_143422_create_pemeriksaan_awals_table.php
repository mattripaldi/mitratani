<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeriksaanAwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksaan_awals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id');
            $table->foreignId('lahan_pelanggan_id');
            $table->string('letak_areal')->default('salah');
            $table->string('luas_areal')->default('salah');
            $table->string('isolasi')->default('salah');
            $table->string('sejarah_lapang')->default('salah');
            $table->string('asal_jumlah_benih')->default('salah');
            $table->text('catatan')->default('Tanam Benih Sesuai Rencana');
            $table->string('kesimpulan')->nullable();
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
        Schema::dropIfExists('pemeriksaan_awals');
    }
}
