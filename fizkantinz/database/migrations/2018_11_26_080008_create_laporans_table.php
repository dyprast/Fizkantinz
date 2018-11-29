<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Label');
            $table->text('Deskripsi_laporan');
            $table->enum('Status',['Pending','Terkirim','Diterima']);
            $table->integer('Siswa_id')->unsigned();
            $table->integer('Toko_id')->unsigned();
            $table->foreign('Siswa_id')->references('id')->on('siswas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('Toko_id')->references('id')->on('tokos')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('laporans');
    }
}
