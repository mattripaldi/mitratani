<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnPemeriksaanInPemeriksaanLanjutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pemeriksaan_lanjuts', function (Blueprint $table) {
            $table->renameColumn('pemeriksaan_awal', 'jenis_pemeriksaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pemeriksaan_lanjuts', function (Blueprint $table) {
            $table->renameColumn('pemeriksaan_awal', 'jenis_pemeriksaan');
        });
    }
}
