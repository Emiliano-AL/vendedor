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
        DB::table('users')->insert([
            'usuario' => 'Admin Admin',
            'password' => Hash::make('secret'),
            'idrol' => 1,
            'condicion' => 1
        ]);
    }
}
