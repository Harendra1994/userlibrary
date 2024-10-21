<?php
namespace Library\UserRolePermission\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
