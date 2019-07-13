<?php

namespace App\Observers;

use Str;
use App\Models\BackpackUser;

class UserObserver
{
	public function creating(BackpackUser $user)
	{
		$user->api_token = Str::random(60);
	}
}
