<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('goods')->delete();
        DB::table('users')->delete();
        DB::table('roles')->delete();
        DB::table('products')->delete();
        DB::table('categories')->delete();

        $this->call(RolesTableSeeder::class);
        $this->call(MonarreAdminSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(GoodTableSeeder::class);
    }
}
