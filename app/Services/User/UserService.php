<?php
 namespace App\Services\User;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class UserService implements UserServiceInterface
{
    public function store($request)
    {
        $request['password'] = Hash::make($request['password']);
        $data = User::create($request);
        $data->assignRole($request['role_id']);
        return $data;
    }
    public function update($request, $id)
    {
        $user=User::where('id' ,$id)->first();
        $data = $user->update($request);
        $user->syncRoles($request['role_id']);
        return $data;
    }

    public function delete($id)
    {
        $data=User::where('id',$id)->first();
        return $data->delete();
    }

    public function customersWithName($request)
    {
        $data = User::where('name', 'like', '%' . $request->searchuser . '%')
        ->where('role_id', 5)
        ->get();
        return $data;
    }
    public function userAdminWithName($request)
    {
        $data =User::where('name','like','%'.$request->searchuser.'%')->where('role_id' , '!=' , 5 )->get();

        return $data;
    }
}
