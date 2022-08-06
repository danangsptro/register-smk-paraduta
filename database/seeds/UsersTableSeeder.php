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
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'jenis_kelamin' => 'laki-laki',
            'alamat'=> 'Tangerang',
            'user_role' => 'admin',
            'no_telepon' => '081283134032',
            'tempat_lahir' => 'Brebes',
            'tanggal_lahir' => '1999-11-19',
            'password' => Hash::make('qwerty'),
        ]);
    }
}
