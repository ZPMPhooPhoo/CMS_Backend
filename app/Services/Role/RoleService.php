<?php
namespace App\Services\Role;

use App\Services\Role\RoleServiceInterface;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleService implements RoleServiceInterface
{
    public function store($request)
    {  
        $role =Role::create($request);
        $permission =Permission::whereIn('id', $request->input('permissions'))->get();
        $role->givePermissionTo($permission);
        return $role;
    }

    public function update($request, $id){
        $role = Role::where('id', $id)->first();
        return $role->update($request);
    }

    public function delete($id)
    {
        $data = Role::where('id', $id)->first();
        return $data->delete();
    }
}