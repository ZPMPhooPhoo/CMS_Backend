<?php
namespace App\Services\Role;

use App\Services\Role\RoleServiceInterface;
use Spatie\Permission\Models\Role;

class RoleService implements RoleServiceInterface
{
    public function store($request)
    {        
        return Role::create($request);
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