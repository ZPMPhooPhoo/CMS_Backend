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
        try {
            DB::transaction(function() use($request)
            {
                $request['password'] = Hash::make($request['password']);
                $data = User::create($request);
                $data->assignRole($request['role_id']);
                return $data;
            });
        } catch (Exception $e) {
            Log::channel('web_daily_error')->error("Admin Create", [$e->getMessage(), $e->getCode()]);
            return Redirect::back()->withErrors($e->getMessage());
        }
    }
    public function update($request, $id)
    {
        
        $user=User::where('id' ,$id)->first();
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
        return $data;
    }
    public function userAdminWithName($request){
        $data =User::where('name','like','%'.$request->searchuser.'%')->where('role_id' , '!=' , 5 )->get();

        return $data;
    }
}
