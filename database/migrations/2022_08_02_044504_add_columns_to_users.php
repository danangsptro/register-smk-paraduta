<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('jenis_kelamin',15)->after('email');
            $table->text('alamat')->after('jenis_kelamin');
            $table->string('user_role',15)->after('alamat');
            $table->bigInteger('no_telepon')->after('user_role');
            $table->string('tempat_lahir',20)->after('no_telepon');
            $table->date('tanggal_lahir')->after('tempat_lahir');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
