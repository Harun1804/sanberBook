<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarPertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_pertanyaan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('isi_komentar', 255);
            $table->unsignedInteger('profile_id');
            $table->unsignedInteger('pertanyaan_id');
            $table->timestamps();
        });
        Schema::table('komentar_pertanyaan', function (Blueprint $table) {
            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
            $table->foreign('profile_id')->references('id')->on('profile');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komentar_pertanyaan');
    }
}
