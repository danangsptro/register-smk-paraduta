<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('no_invoice_formulir',20)->nullable();
            $table->string('no_invoice_pendaftaran',20)->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('jenis_biaya_id')->unsigned();
            $table->bigInteger('status_id')->unsigned();
            $table->timestamps();

            $table->foreign('jenis_biaya_id')->references('id')->on('jenis_biayas')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
