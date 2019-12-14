<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Product::create([
            'name' => 'Product 1',
            'image' => 'product1.png',
            'category_id' => 1 ,
            'subCategory_id' => 2
            
        ]);

        App\Product::create([
            'name' => 'Product 2',
            'image' => 'product2.jpg',
            'category_id' => 2 ,
            'subCategory_id' => 2
            
        ]);

        App\Product::create([
            'name' => 'Product 3',
            'image' => 'product2.jpg',
            'category_id' => 1 ,
            'subCategory_id' => 1
            
        ]);

        App\Product::create([
            'name' => 'Product 4',
            'image' => 'product2.jpg',
            'category_id' => 2 ,
            'subCategory_id' => 1
            
        ]);

        App\Product::create([
            'name' => 'Product 5',
            'image' => 'product1.png',
            'category_id' => 1 ,
            'subCategory_id' => 2
            
        ]);

        App\Product::create([
            'name' => 'Product 6',
            'image' => 'product1.png',
            'category_id' => 2 ,
            'subCategory_id' => 2
            
        ]);

        App\Product::create([
            'name' => 'Product 7',
            'image' => 'product1.png',
            'category_id' => 2 ,
            'subCategory_id' => 2
            
        ]);

        App\Product::create([
            'name' => 'Product 8',
            'image' => 'product1.png',
            'category_id' => 2 ,
            'subCategory_id' => 2
            
        ]);
    }
}
