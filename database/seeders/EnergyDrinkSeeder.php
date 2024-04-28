<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnergyDrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $energyDrinks = [
            ['brand_id' => 1, 'description' => 'Red Bull Energy Drink', 'content' => 80, 'sugar_free' => false, 'price' => 2.99,],
            ['brand_id' => 1, 'description' => 'Red Bull Sugar Free', 'content' => 80, 'sugar_free' => true, 'price' => 2.99,],
            ['brand_id' => 2, 'description' => 'Monster Energy Drink', 'content' => 160, 'sugar_free' => false, 'price' => 2.49,],
            ['brand_id' => 2, 'description' => 'Monster Ultra Zero', 'content' => 160, 'sugar_free' => true, 'price' => 2.49,],
            ['brand_id' => 3, 'description' => 'Rockstar Original', 'content' => 160, 'sugar_free' => false, 'price' => 2.29,],
            ['brand_id' => 3, 'description' => 'Rockstar Sugar Free', 'content' => 160, 'sugar_free' => true, 'price' => 2.29,],
            ['brand_id' => 4, 'description' => 'NOS Energy Drink', 'content' => 160, 'sugar_free' => false, 'price' => 1.99,],
            ['brand_id' => 4, 'description' => 'NOS Sugar Free', 'content' => 160, 'sugar_free' => true, 'price' => 1.99,],
            ['brand_id' => 5, 'description' => 'Xyience Cherry Lime', 'content' => 176, 'sugar_free' => false, 'price' => 2.79,],
            ['brand_id' => 5, 'description' => 'Xyience Sugar Free', 'content' => 176, 'sugar_free' => true, 'price' => 2.79,],
            ['brand_id' => 6, 'description' => 'AMP Energy Drink', 'content' => 142, 'sugar_free' => false, 'price' => 1.79,],
            ['brand_id' => 6, 'description' => 'AMP Energy Zero', 'content' => 142, 'sugar_free' => true, 'price' => 1.79,],
            ['brand_id' => 7, 'description' => 'Full Throttle Original', 'content' => 144, 'sugar_free' => false, 'price' => 1.99,],
            ['brand_id' => 7, 'description' => 'Full Throttle Sugar Free', 'content' => 144, 'sugar_free' => true, 'price' => 1.99,],
            ['brand_id' => 8, 'description' => 'Guru Energy Drink', 'content' => 100, 'sugar_free' => false, 'price' => 2.49,],
            ['brand_id' => 8, 'description' => 'Guru Lite', 'content' => 100, 'sugar_free' => true, 'price' => 2.49,],
            ['brand_id' => 9, 'description' => 'Xenergy Original', 'content' => 176, 'sugar_free' => false, 'price' => 2.99,],
            ['brand_id' => 9, 'description' => 'Xenergy Sugar Free', 'content' => 176, 'sugar_free' => true, 'price' => 2.99,],
            ['brand_id' => 10, 'description' => 'Celsius Original', 'content' => 200, 'sugar_free' => false, 'price' => 2.79,],
            ['brand_id' => 10, 'description' => 'Celsius Sugar Free', 'content' => 200, 'sugar_free' => true, 'price' => 2.79,],
            ['brand_id' => 1, 'description' => 'Red Bull Tropical', 'content' => 80, 'sugar_free' => false, 'price' => 2.99,],
            ['brand_id' => 2, 'description' => 'Monster Pacific Punch', 'content' => 160, 'sugar_free' => false, 'price' => 2.49,],
            ['brand_id' => 3, 'description' => 'Rockstar Whipped Strawberry', 'content' => 160, 'sugar_free' => false, 'price' => 2.29,],
            ['brand_id' => 4, 'description' => 'NOS GT Grape', 'content' => 160, 'sugar_free' => false, 'price' => 1.99,],
            ['brand_id' => 5, 'description' => 'Xyience Mango Guava', 'content' => 176, 'sugar_free' => false, 'price' => 2.79,],
            ['brand_id' => 6, 'description' => 'AMP Energy Tropical Punch', 'content' => 142, 'sugar_free' => false, 'price' => 1.79,],
            ['brand_id' => 7, 'description' => 'Full Throttle Citrus', 'content' => 144, 'sugar_free' => false, 'price' => 1.99,],
            ['brand_id' => 8, 'description' => 'Guru Organic Energy', 'content' => 100, 'sugar_free' => false, 'price' => 2.49,],
            ['brand_id' => 9, 'description' => 'Xenergy Triple Citrus', 'content' => 176, 'sugar_free' => false, 'price' => 2.99,],
            ['brand_id' => 10, 'description' => 'Celsius Raspberry Acai Green Tea', 'content' => 200, 'sugar_free' => false, 'price' => 2.79,],
        ];

        foreach ($energyDrinks as $drink) {
            DB::table('energy_drinks')->insert($drink);
        }
    }
}
