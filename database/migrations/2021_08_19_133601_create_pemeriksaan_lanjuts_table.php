<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeriksaanLanjutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksaan_lanjuts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pemeriksaan_awal_id');
            $table->string('pemeriksaan_awal');
            $table->string('isolasi_timur');
            $table->string('isolasi_barat');
            $table->string('isolasi_selatan');
            $table->string('isolasi_utara');
            $table->string('barier');
            $table->time('waktu');
            $table->string('sifat_penanaman');
            $table->string('serangan_hama');
            $table->date('perkiraan_tanggal_panen')->nullable();
            $table->decimal('perkiraan_produksi');
            $table->decimal('jumlah_contoh_pemeriksaan');
            $table->integer('inbrida_cvl1')->nullable();
            $table->integer('inbrida_cvl2')->nullable();
            $table->integer('inbrida_cvl3')->nullable();
            $table->integer('inbrida_cvl4')->nullable();
            $table->string('status_pemeriksaan')->nullable();
            $table->string('foto_monitoring');
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
        Schema::dropIfExists('pemeriksaan_lanjuts');
    }
}
