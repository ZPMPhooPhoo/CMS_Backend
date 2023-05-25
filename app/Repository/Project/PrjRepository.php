<?php

namespace App\Repository\Project;
use App\Models\Project;
use App\Models\User;
use App\Models\UserProject;
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
        $data = Project::with('category')->where('id', $id)->first();
        return $data;
    }
    public function user_project($id)
    {
        // $userIds = DB::table('user_projects')
        //     ->where('user_id', $id)
        //     ->pluck('project_id')
        //     ->toArray();
        // return $userIds;

        $userID = $id; // ID of the user

        $data = Project::with("category")->whereHas('user', function ($query) use ($userID) {
            $query->where('user_id', $userID);
        })->get();

        // foreach ($projects as $project) {
        //     echo "Project ID: " . $project->id . "\n";
        //     echo "Project Name: " . $project->name . "\n";

        // }
        return $data;
    }

}
