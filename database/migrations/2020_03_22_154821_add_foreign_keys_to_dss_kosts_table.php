<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDssKostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dss_kosts', function (Blueprint $table) {
            $table->foreign('id_fasilitas_kamar','fk_fasilitas_kamar')->references('id')->on('dss_fasilitas_kamars');
            $table->foreign('id_fasilitas_penunjang','fk_fasilitas_penunjang')->references('id')->on('dss_fasilitas_penunjangs');
            $table->foreign('id_fasilitas_lingkungan','fk_fasilitas_lingkungan')->references('id')->on('dss_fasilitas_lingkungans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dss_kosts', function (Blueprint $table) {
            $table->dropForeign('fk_fasilitas_kamar');
            $table->dropForeign('fk_fasilitas_penunjang');
            $table->dropForeign('fk_fasilitas_lingkungan');
        });
    }
}
