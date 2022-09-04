<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormPendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('nama_calon_siswa',50)->nullable();
            $table->string('ijazah', 100)->nullable();
            $table->string('skhun',100)->nullable();
            $table->string('foto', 100)->nullable();
            $table->string('asal_sekolah',30)->nullable();
            $table->bigInteger('jurusan_id')->nullable()->unsigned();
            $table->bigInteger('kelas_id')->nullable()->unsigned();
            $table->integer('tahun_lulus')->nullable();
            $table->bigInteger('no_telp_siswa')->nullable();
            $table->string('nama_orang_tua',50)->nullable();
            $table->bigInteger('no_telp_orang_tua')->nullable();
            $table->bigInteger('status_id')->nullable()->unsigned();
            $table->timestamps();

            $table->foreign('jurusan_id')->references('id')->on('jurusans')->onDelete('cascade');
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form_pendaftarans');
    }
}
