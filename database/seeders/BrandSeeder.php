<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['id' => 1, 'name' => 'Red Bull',],
            ['id' => 2, 'name' => 'Monster',],
            ['id' => 3, 'name' => 'Rockstar',],
            ['id' => 4, 'name' => 'NOS',],
            ['id' => 5, 'name' => 'Xyience',],
            ['id' => 6, 'name' => 'AMP',],
            ['id' => 7, 'name' => 'Full Throttle',],
            ['id' => 8, 'name' => 'Guru',],
            ['id' => 9, 'name' => 'Xenergy',],
            ['id' => 10, 'name' => 'Celsius',],
        ];

        foreach ($brands as $brand) {
            DB::table('brands')->insert($brand);
        }
    }
}
