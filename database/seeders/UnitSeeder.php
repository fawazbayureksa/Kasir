<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unit')->insert([
            'name' => 'Pcs'
        ]);
        DB::table('unit')->insert([
            'name' => 'Buah'
        ]);
    }
}
