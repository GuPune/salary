<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users')->delete();
		DB::table('users')->insert([
		'email' => 'admin@gmail.com',
		'password' => Hash::make('12345678'),
		'name' => 'Administrator',
		'card' => '2409900020050',
		'is_admin' => 1,
		'created_at' => date('Y-m-d H:i:s')
		]);

    }
}
