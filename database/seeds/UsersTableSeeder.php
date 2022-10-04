<?php

use Carbon\Carbon;
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
            'name' => 'panitia',
            'email' => 'panitia@gmail.com',
            'jenis_kelamin' => 'laki-laki',
            'alamat' => 'Tangerang',
            'user_role' => 'panitia',
            'no_telepon' => '081283134032',
            'tempat_lahir' => 'Brebes',
            'tanggal_lahir' => '1999-11-19',
            'password' => Hash::make('qwerty'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('users')->insert([
            'name' => 'tu',
            'email' => 'tu@gmail.com',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => 'Kalimantan',
            'user_role' => 'tu',
            'no_telepon' => '081281281281',
            'tempat_lahir' => 'Brebes',
            'tanggal_lahir' => '1989-11-20',
            'password' => Hash::make('qwerty'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'kepalasekolah',
            'email' => 'kepalasekolah@gmail.com',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => 'Kalimantan',
            'user_role' => 'kepalasekolah',
            'no_telepon' => '0891271271272',
            'tempat_lahir' => 'Brebes',
            'tanggal_lahir' => '1989-01-20',
            'password' => Hash::make('qwerty'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('statuses')->insert([
            'nama_status' => 'Belum Bayar Formulir Pendaftaran',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('statuses')->insert([
            'nama_status' => 'Sudah Bayar Formulir Pendaftaran',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('statuses')->insert([
            'nama_status' => 'Menerima Formulir Pendaftaran',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('statuses')->insert([
            'nama_status' => 'Sudah Register Pendaftaran',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('statuses')->insert([
            'nama_status' => 'Belum Bayar Pendaftaran',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('statuses')->insert([
            'nama_status' => 'Sudah Bayar Pendaftaran',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('statuses')->insert([
            'nama_status' => 'Sudah Diterima',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('jenis_biayas')->insert([
            'jenis_biaya' => 'Biaya Formulir',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('jenis_biayas')->insert([
            'jenis_biaya' => 'Biaya Pendaftaran',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('jurusans')->insert([
            'kode_jurusan' => 'KPR',
            'nama_jurusan' => 'KEPERAWATAN',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('jurusans')->insert([
            'kode_jurusan' => 'PRL',
            'nama_jurusan' => 'PERHOTELAN',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('jurusans')->insert([
            'kode_jurusan' => 'MM',
            'nama_jurusan' => 'MULTIMEDIA',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('jurusans')->insert([
            'kode_jurusan' => 'AK',
            'nama_jurusan' => 'AKUTANSI',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
