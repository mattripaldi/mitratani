<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStokPadisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stok_padis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_varietas_padi')->unsigned();
            $table->foreign('id_varietas_padi')->references('id')->on('varietas_padis');
            $table->date('tanggal_beli_benih');
            $table->decimal('harga_beli_sak', 10,0);
            $table->decimal('harga_jual_sak', 10,0);
            $table->decimal('harga_jual_kg', 10,0);
            $table->decimal('perkiraan_laba', 10,0)->nullable();
            $table->float('jumlah_stok', 5,2);
            $table->date('tanggal_kadaluarsa');
            $table->String('label');
            $table->String('kelas_benih');
            $table->string('supplier_benih');
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
        Schema::dropIfExists('stok_padis');
    }
}
