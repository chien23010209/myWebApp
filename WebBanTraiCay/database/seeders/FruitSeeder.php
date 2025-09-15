<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fruit;

class FruitSeeder extends Seeder
{
    public function run()
    {
        Fruit::create(['name' => 'Táo', 'price' => 20000]);
        Fruit::create(['name' => 'Cam', 'price' => 15000]);
        Fruit::create(['name' => 'Xoài', 'price' => 30000]);
    }
}
