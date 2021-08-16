<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLahanPelanggansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lahan_pelanggans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lahan');
            $table->text('alamat');
            $table->integer('luas_lahan');
            $table->string('sejarah_lahan');
            $table->foreignId('pelanggan_id');
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
        Schema::dropIfExists('lahan_pelanggans');
    }
}
