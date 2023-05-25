<?php

namespace App\Repository\Project;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class PrjRepository implements PrjRepoInterface
{
    public function get()
    {
        $data = Project::all();
        return $data;
    }

    public function show($id)
    {
        $data = Project::where('id', $id)->first();
        return $data;
    }

    public function prj_user()
    {
        // $data = DB::table('user_projects')
        //     ->where('user_id', 3)
        //     ->value('project_id');

        $userIds = DB::table('user_projects')
            ->where('user_id', 3)
            ->pluck('project_id')
            ->toArray();
        return $userIds;


            
        
    }
}