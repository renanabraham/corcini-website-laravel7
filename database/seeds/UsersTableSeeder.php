<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => 'Renan',
            'email' => 'renanabraham@gmail.com',
            'password' => '$2y$10$/6MZRHV1wPuK4mUOl.CITeTHUIijYRf1sqldaKR5DwEpNxHUT3QgG'
        ]);

        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => 'Dra. Ana',
            'email' => 'ana@corcini.com.br',
            //senha: anacorcini
            'password' => '$2y$10$8iPi8NDJTzWgbl6Zxjz/4uaMQyWXvFgZXn8hrsOk.TXZHq3r8uS0y'
        ]);

        \Illuminate\Support\Facades\DB::table('users')->insert([
            'name' => 'Ale',
            'email' => 'ale@corcini.com.br',
            //senha: anacorcini
            'password' => '$2y$10$8iPi8NDJTzWgbl6Zxjz/4uaMQyWXvFgZXn8hrsOk.TXZHq3r8uS0y'
        ]);


    }
}
