<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'admin',
        	'email' => 'admin@gmail.com',
        	'is_admin' =>1,
        	'status'  =>1,
        	'password' =>bcrypt('admin123'),
        ]);
    }
}
