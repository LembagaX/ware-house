<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

	const ADMIN = 1; 
	const FINANCE = 2; 
	const PRODUCTION = 3; 
	const PACKING = 4; 
	const GUDANG = 5;
	const PPIC = 6;
	const PURCHASE = 7;

	protected $fillable = [
		'name',
	];

	public function users()
	{
		return $this->hasMany(User::class);
	}
}
