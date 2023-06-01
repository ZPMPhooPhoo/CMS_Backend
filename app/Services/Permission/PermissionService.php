<?php

namespace App\Services\Permission;
use App\Services\Permission\PermissionServiceInterface;
use Spatie\Permission\Models\Permission;

class PermissionService implements PermissionServiceInterface
{
    public function store($request)
    {
        $data = Permission::create($request);
        return $data;
    }

    public function update($request,$id)
    {
        $permission = Permission::where('id', $id)->first();
        $data = $permission->update($request);
        return $data;
    }

    public function delete($id)
    {
        $data = Permission::where('id', $id)->first();
        return $data->delete();
    }
}