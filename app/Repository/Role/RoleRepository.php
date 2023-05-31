<?php

namespace App\Repository\Role;

use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RoleRepository implements RoleRepoInterface
{
    public function get()
    {
        $data = Role::all() ;
        $per =Permission::all();
        // $rolePermission=[];
        foreach($data as $da){
                $permissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$da->id)
                // ->pluck('role_has_permissions.permission_id')
                ->get();
                foreach($permissions as $pers){
                        $permissionName =DB::table("permissions")->where("permissions.id" ,$pers->permission_id)->pluck('permissions.name')->all();
                        $rolePermission =$permissionName;
                }
                // $rolePermission []=$permissions;
                    
        }
         
        return [
            'data' => $data,
            'rolePermissions' => $rolePermission
        ];
    }

    public function show($id)
    {
        $role = Role::where('id', $id)->first();
        $permission = Permission::get();

        $rolePermissions = $role->permissions->pluck('name')->toArray();

        $rolePermission = $role->permissions->pluck('id')->toArray();

        //$rolePermissions = $role->permissions->pluck('id')->toArray();
        // return ($data,$permission,$rolePermissions);

        return ([
            'role' => $role,
            'permissions' => $permission,
            'rolePermissions' => $rolePermissions,
            'rolePermission' => $rolePermission
        ]);
    }
}
