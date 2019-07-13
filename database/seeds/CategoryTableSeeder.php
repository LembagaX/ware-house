<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
        	'name' => 'Biscuit'
        ]);

        Category::create([
        	'name' => 'Cookies'
        ]);

        Category::create([
        	'name' => 'Chocolate'
        ]);

        Category::create([
        	'name' => 'Candy'
        ]);

        Category::create([
        	'name' => 'Nuts'
        ]);

        Category::create([
        	'name' => 'Snack'
        ]);
    }
}
