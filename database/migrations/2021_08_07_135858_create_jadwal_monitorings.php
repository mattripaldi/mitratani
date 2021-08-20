<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalMonitorings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_monitorings', function (Blueprint $table) {
            $table->id();
<<<<<<< Updated upstream:database/migrations/2021_08_07_135858_create_jadwal_monitorings.php
            $table->string('nomor_induk_pesanan')->unique();
=======
            $table->foreign('id_varietas_padi')->references('id')->on('varietas_padis');
>>>>>>> Stashed changes:database/migrations/2021_08_07_135858_create_jadwal_monitoring.php
            $table->date('fase_pendahuluan');
            $table->date('fase_vegetatif');
            $table->date('fase_berbunga');
            $table->date('fase_masak');
            $table->foreignId('pesanan_id');
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
        Schema::dropIfExists('jadwal_monitorings');
    }
}
