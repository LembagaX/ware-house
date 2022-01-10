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
    		'code' => 'AC01',
    		'name' => 'ASSORTED COOKIES (Box 5/300gr)',
    		'quantity' => 0,
    		'price' => 10000,
    		'category_id' => Category::first()->id,
    	]);
        Product::create([
            'code' => 'ACL0501',
            'name' => 'ASSORTED COOKIES LEBARAN (Box 5/300gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'B2001C',
            'name' => 'BERNIE BALL CHOCOLATE (Renceng 1/20/10 gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'B2001B',
            'name' => 'BERNIE BALL MIX (Renceng 1/20/10 gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'B1201S',
            'name' => 'BIMO SEALLYS (Toples 1/12/280 gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'BC101P',
            'name' => 'BISCUIT COATING (PIKORO)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'BC101T',
            'name' => 'BISCUIT COATING (TOBE)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'BC2001',
            'name' => 'BISCUIT MIX (Dus 1/40/45gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'CC3K',
            'name' => 'CHOCO CHIPS (Crt 1/3Kg)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'CC4001',
            'name' => 'CHOCO CHIPS (Dus 1/40/40gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'CCKG',
            'name' => 'CHOCO CHIPS 3,5Kg',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'CC4002',
            'name' => 'CHOCO CHIPS PANDAN (Dus 1/40/40gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'CCTPL01',
            'name' => 'CHOCO CHIPS PANDAN (Tpl 1/3,5Kg)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'CC4003',
            'name' => 'CHOCO CHIPS STRAWBERRY (Dus 1/40/40gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'CCTPL',
            'name' => 'CHOCO CHIPS TOPLES (Tpl 1/3.5Kg)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'FB1201',
            'name' => 'FUNGKY BALL (Renceng 1/20/13gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'FBB5',
            'name' => 'FUNGKY BALL (Ball 1/5Kg)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'FBS9',
            'name' => 'FUNGKY BOLA BOLA SUSU',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'FBS200',
            'name' => 'FUNGKY BOLA BOLA SUSU (Renceng 1/20/10gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'G3001',
            'name' => 'GIGGLES (Bag 1/30/50gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'GD2001',
            'name' => 'GOLDEN BALL 500 (Renceng 1/100/14gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'GBM200',
            'name' => 'GOLDEN BALL 500 MIX (Renceng 1/20/14gr)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'GD1201',
            'name' => 'GOLDEN BALL TOPLES (Toples 1/12/100pcs)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
        Product::create([
            'code' => 'GDP121',
            'name' => 'GOLDEN PANDA MAS (Toples 1/12/100pcs)',
            'quantity' => 0,
            'price' => 10000,
            'category_id' => Category::first()->id,
        ]);
    }
}
