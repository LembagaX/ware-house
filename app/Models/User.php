<?php

namespace App\Models;

use App\Role;
use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use CrudTrait;

    protected $table = 'users';
    protected $fillable = [
        'email', 'role_id', 'password', 'name'
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function hasRole(int $role)
    {
        return $this->role_id === $role;
    }
}
