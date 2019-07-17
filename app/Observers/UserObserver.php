<?php

namespace App\Observers;

use App\User;
use App\Role;

class UserObserver
{
    public function creating(User $user)
    {
        $user->role_id = Role::ADMIN;
    }
}
