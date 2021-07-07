<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelanggansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
// <<<<<<< Updated upstream
//             $table->string('nik')->nullable();
//             $table->string('nama_lengkap')->nullable();
//             $table->string('alamat')->nullable();
//             $table->string('telepon')->nullable();
//             $table->string('jenis_kelamin')->nullable();
// =======
            $table->string('nik');
            $table->string('nama_lengkap');
            $table->string('alamat');
            $table->string('telepon');
            $table->string('jenis_kelamin');
            $table->timestamp('email_verified_at')->nullable();
// >>>>>>> Stashed changes
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('pelanggans');
    }
}
