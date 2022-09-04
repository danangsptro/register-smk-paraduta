<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upload_invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('nama_calon_siswa', 50)->nullable();
            $table->string('bukti_transfer_1', 100)->nullable();
            $table->string('validasi_bukti_transfer_1', 100)->nullable();
            $table->string('bukti_transfer_2', 100)->nullable();
            $table->string('validasi_bukti_transfer_2', 100)->nullable();
            $table->bigInteger('status_id')->nullable()->unsigned();
            $table->timestamps();

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
        Schema::dropIfExists('upload_invoices');
    }
}
