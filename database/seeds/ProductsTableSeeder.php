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
            'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
            'category_id' => 1 ,
            'subCategory_id' => 2
            
        ]);

        App\Product::create([
            'name' => 'Product 2',
            'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
            'category_id' => 2 ,
            'subCategory_id' => 2
            
        ]);

        App\Product::create([
            'name' => 'Product 3',
            'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
            'category_id' => 1 ,
            'subCategory_id' => 1
            
        ]);

        App\Product::create([
            'name' => 'Product 4',
            'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
            'category_id' => 2 ,
            'subCategory_id' => 1
            
        ]);

        App\Product::create([
            'name' => 'Product 5',
            'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
            'category_id' => 1 ,
            'subCategory_id' => 2
            
        ]);

        App\Product::create([
            'name' => 'Product 6',
            'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
            'category_id' => 2 ,
            'subCategory_id' => 2
            
        ]);

        App\Product::create([
            'name' => 'Product 7',
            'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
            'category_id' => 2 ,
            'subCategory_id' => 2
            
        ]);

        App\Product::create([
            'name' => 'Product 8',
            'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
            'category_id' => 2 ,
            'subCategory_id' => 2
            
        ]);
    }
}
