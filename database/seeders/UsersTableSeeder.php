<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

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
            'name' => 'Admin',
            'email' => 'admin@time2share.com',
            'password' => bcrypt('admin'),
            'role' => 'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'Vinh',
            'email' => 'vinh@time2share.com',
            'password' => bcrypt('vinh'),
        ]);
    }
}
