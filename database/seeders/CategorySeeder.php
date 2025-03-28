<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['code' => 'FRU', 'name' => 'Trái cây'],
            ['code' => 'SEA', 'name' => 'Hải sản tươi sống'],
            ['code' => 'MEAT', 'name' => 'Thịt tươi sạch'],
        ]);
    }
}
