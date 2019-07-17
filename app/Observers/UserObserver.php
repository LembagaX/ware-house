<?php

namespace App\Observers;

use Str;
use App\User;
use App\Role;
use App\Models\BackpackUser;

class UserObserver
{
	public function creating(User $user)
	{
		$user->api_token = Str::random(60);
        $user->role_id = Role::ADMIN;
    }
}
