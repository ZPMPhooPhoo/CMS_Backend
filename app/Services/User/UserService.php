<?php
 namespace App\Services\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService implements UserServiceInterface
{
    public function store($request){
        $request['password'] = Hash::make($request['password']);
        $data = User::create($request);
        $data->assignRole($request['role_id']);
        return $data;
    }
    public function update($request, $id)
    {
        $user=User::where('id' ,$id)->first();
        // $user->email =$request->email;
        // $user->name =$request->name;
        // $user->
        // $request['password'] = Hash::make($request['password']);
        $user->syncRoles($request['role_id']);
        return $user->update($request);
    }
    public function delete($id){
        $data=User::where('id',$id)->first();
        return $data->delete();
    }
    public function customersWithName($request){
        $data = User::where('name', 'like', '%' . $request->searchuser . '%')
        ->where('role_id', 5)
        ->get();

        // $searchName =$request->searchuser;

        return $data;

    }
    public function userAdminWithName($request){
        $data =User::where('name','like','%'.$request->searchuser.'%')->get();

        return $data;
    }
}