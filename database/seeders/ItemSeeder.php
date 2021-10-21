<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item')->insert([
            'name' => 'Teh Pucuk Harum',
            'category_id' => 3,
            'unit_id' => 4,
            'harga_beli' => 2500,
            'harga_jual' => 3000,
            'stok' => 10
        ]);
    }
}
