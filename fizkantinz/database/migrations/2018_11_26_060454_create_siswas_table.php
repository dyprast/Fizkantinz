<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('NIS')->index();
            $table->string('Nama');
            $table->integer('Kelas_id')->unsigned();
            $table->string('Jenis_kelamin');
            $table->string('Tempat_lahir');
            $table->date('Tanggal_lahir');
            $table->string('Agama');
            $table->text('Alamat');
            $table->enum('Status',['Aktif','Tidak Aktif']);
            $table->foreign('Kelas_id')->references('id')->on('kelas')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}
