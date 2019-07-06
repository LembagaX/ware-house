<?php

use App\Models\BackpackUser;
use Illuminate\Database\Seeder;

class MonarreAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BackpackUser::create([
            'name' => 'Admin Monarre',
            'email' => 'admin@monarre.com',
            'password' => bcrypt('monarre'),
        ]);
    }
}
