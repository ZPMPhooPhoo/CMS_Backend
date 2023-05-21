<?php
namespace App\Repository\User;

use App\Models\User;

class UserRepository implements UserRepoInterface
{
    public function get()
    {
        $data=User::all();
        return $data;
    }
    public function show($id){
        $data=User::where('id',$id)->first();
        return $data;
    }
    public function customers()
    {
        $data=User::where('role_id' , 5)->get();
        return $data;
    }
}

?>
