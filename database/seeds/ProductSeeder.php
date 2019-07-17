<?php

use App\Models\Product;
use App\Models\Category;
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
    		'code' => 'DUM001',
    		'name' => 'Dummy Product',
    		'quantity' => 0,
    		'price' => 10000,
    		'category_id' => Category::first()->id,
    	]);
        Product::create([
            'code' => 'DUM002',
            'name' => 'Dummy Product More',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
    }
}
