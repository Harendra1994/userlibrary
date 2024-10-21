<?php
namespace Library\UserRolePermission\Services;

use Library\UserRolePermission\Models\User;

class PermissionService
{
    public static function userHasPermission(User $user, $permission)
    {
        return $user->roles()->whereHas('permissions', function ($query) use ($permission) {
            $query->where('name', $permission);
        })->exists();
    }
}
