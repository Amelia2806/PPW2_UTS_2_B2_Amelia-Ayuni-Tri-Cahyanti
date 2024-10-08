<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; 

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'code' => 'P001',
            'name' => 'Product 1',
            'quantity' => 10,
            'price' => 100.00,
            'description' => 'Description for Product 1',
        ]);

        Product::create([
            'code' => 'P002',
            'name' => 'Product 2',
            'quantity' => 20,
            'price' => 150.00,
            'description' => 'Description for Product 2',
        ]);

        Product::create([
            'code' => 'P003',
            'name' => 'Product 3',
            'quantity' => 15,
            'price' => 200.00,
            'description' => 'Description for Product 3',
        ]);
    }
}
