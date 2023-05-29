<?php

namespace App\Repository\Role;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleRepository implements RoleRepoInterface
{
    public function get()
    {
        $data = Role::all();
        return $data;
    }

    public function show($id)
    {
        $role = Role::where('id', $id)->first();
        $permission = Permission::get();
        $rolePermissions = $role->permissions->pluck('name')->toArray();
        return ([
            'role' => $role,
            'permissions' => $permission,
            'rolePermissions' => $rolePermissions
        ]);
    }
}
