<?php

namespace App\Observers;

use Str;
use App\Role;
use App\Models\BackpackUser;

class UserObserver
{
	public function creating($user)
	{
		$user->api_token = Str::random(60);
        $user->role_id = Role::ADMIN;
        $user->role_id = Role::PRODUCTION;
    }
}
