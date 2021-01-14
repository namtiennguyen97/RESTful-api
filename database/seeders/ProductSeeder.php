<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Nam Nguyen',
            'vendor' => 'blizzard',
            'price' => 9999
        ]);

        Product::create([
            'name' => 'Nguyen',
            'vendor' => 'blizzard',
            'price' => 888
        ]);
    }
}
