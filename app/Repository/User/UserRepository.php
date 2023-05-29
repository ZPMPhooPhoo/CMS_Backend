<?php
namespace App\Repository\User;

use App\Models\User;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class UserRepository implements UserRepoInterface
{
    public function get()
    {
        $data=User::where('role_id' , '!=' , 5)->get();
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
    public function developers()
    {
        $data = User::where('role_id' , 4)->get();
        return $data;
    }
    public function developer_project($project_id)
    {
        // $data = User::whereHas('project' , function($query) use ($project_id) {
        //     $query->where('project_id' , $project_id);
        // })->get();
        $data = User::where('id' , $project_id)->get();
        return $data;
    }
}
