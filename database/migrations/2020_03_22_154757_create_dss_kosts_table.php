<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDssKostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dss_kosts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->integer('harga');
            $table->integer('jarak');
            $table->integer('luas_kamar');
            $table->string('foto');
            $table->string('tipe');
            $table->integer('id_fasilitas_kamar');
            $table->integer('id_fasilitas_penunjang');
            $table->integer('id_fasilitas_lingkungan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dss_kosts');
    }
}
