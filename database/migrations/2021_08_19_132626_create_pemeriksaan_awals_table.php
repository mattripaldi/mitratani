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
            $table->boolean('kebenaran_letak_areal');
            $table->boolean('kebenaran_luas_arel');
            $table->boolean('isolasi');
            $table->boolean('sejarah_lapang');
            $table->boolean('asal_jumlah_benih');
            $table->text('catatan');
            $table->string('kesimpulan');
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
