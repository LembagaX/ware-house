<?php

use Illuminate\Database\Seeder;

use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$role = new Role;
    	$role->id = Role::ADMIN;
    	$role->name = 'Admin';
    	$role->save();

    	$role = new Role;
    	$role->id = Role::FINANCE;
    	$role->name = 'Finance';
    	$role->save();

    	$role = new Role;
    	$role->id = Role::PRODUCTION;
    	$role->name = 'Production';
    	$role->save();

    	$role = new Role;
    	$role->id = Role::PACKING;
    	$role->name = 'Packing';
    	$role->save();

    	$role = new Role;
    	$role->id = Role::GUDANG;
    	$role->name = 'Gudang';
    	$role->save();

    	$role = new Role;
    	$role->id = Role::PPIC;
    	$role->name = 'PPIC';
    	$role->save();

    	$role = new Role;
    	$role->id = Role::PURCHASE;
    	$role->name = 'Purchase';
    	$role->save();

    }
}
