<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Cellphone',
            'owner_email' => "vinh@time2share.com",
            'description' => 'Good working cellphone, take it or leave it.',
            'image' => '/img/cellphone.jpg',
            'category' => 'Electronics',
        ]);
    }
}
