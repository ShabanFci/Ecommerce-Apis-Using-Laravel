<?php

use Illuminate\Database\Seeder;

class SubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
        App\Subcategory::create([
            'name' => 'Subcategory one for category 1',
            'category_id' => 1 
            
        ]);

        App\Subcategory::create([
            'name' => 'Subcategory Two for category 1',
            'category_id' => 1 
            
        ]);

        App\Subcategory::create([
            'name' => 'Subcategory one for category 2',
            'category_id' => 2 
            
        ]);

        App\Subcategory::create([
            'name' => 'Subcategory Two for category 2',
            'category_id' => 2 
            
        ]);
    }
}
