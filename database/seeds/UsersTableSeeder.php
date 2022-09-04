<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'jenis_kelamin' => 'laki-laki',
            'alamat' => 'Tangerang',
            'user_role' => 'admin',
            'no_telepon' => '081283134032',
            'tempat_lahir' => 'Brebes',
            'tanggal_lahir' => '1999-11-19',
            'password' => Hash::make('qwerty'),
        ]);

        DB::table('statuses')->insert([
            'nama_status' => 'Belum Bayar Formulir Pendaftaran'
        ]);

        DB::table('statuses')->insert([
            'nama_status' => 'Sudah Bayar Formulir Pendaftaran'
        ]);

        DB::table('statuses')->insert([
            'nama_status' => 'Menerima Formulir Pendaftaran',
        ]);

        DB::table('statuses')->insert([
            'nama_status' => 'Sudah Register Pendaftaran',
        ]);

        DB::table('statuses')->insert([
            'nama_status' => 'Belum Bayar Pendaftaran'
        ]);

        DB::table('statuses')->insert([
            'nama_status' => 'Sudah Bayar Pendaftaran'
        ]);

        DB::table('statuses')->insert([
            'nama_status' => 'Sudah Diterima'
        ]);

        DB::table('jenis_biayas')->insert([
            'jenis_biaya' => 'Biaya Formulir',
        ]);

        DB::table('jenis_biayas')->insert([
            'jenis_biaya' => 'Biaya Pendaftaran',
        ]);
    }
}
