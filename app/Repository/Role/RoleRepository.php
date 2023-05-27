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
        $data = Role::where('id', $id)->first();
        $permission = Permission::get();
        $rolePermissions = $data->permissions->pluck('id')->toArray();
        // return ($data,$permission,$rolePermissions);
        return response()->json([
            'data' => $data,
            'permissions' => $permission,
            'rolePermissions' => $rolePermissions
        ]);
    }
}