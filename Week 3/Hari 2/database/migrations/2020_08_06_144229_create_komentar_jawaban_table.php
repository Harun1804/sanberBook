<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_jawaban', function (Blueprint $table) {
            $table->increments('id');
            $table->string('komentar_jawaban', 255);
            $table->unsignedInteger('profile_id');
            $table->unsignedInteger('jawaban_id');
            $table->timestamps();
        });
        Schema::table('komentar_jawaban', function (Blueprint $table) {
            $table->foreign('profile_id')->references('id')->on('profile');
            $table->foreign('jawaban_id')->references('id')->on('jawaban');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komentar_jawaban');
    }
}
