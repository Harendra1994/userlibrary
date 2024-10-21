<?php
namespace Library\UserRolePermission\Http\Controllers;

use App\Http\Controllers\Controller;
use Library\UserRolePermission\Models\User;
use Library\UserRolePermission\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::with('roles')->get();
    }

    public function assignRole(Request $request, User $user)
    {
        $role = Role::findOrFail($request->role_id);
        $user->roles()->attach($role);
        return response()->json(['message' => 'Role assigned.']);
    }
}
