<?php

namespace App\Repository\Project;
use App\Models\Project;
// use Carbon\Carbon;
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
        $userID = $id;

        $data = Project::with("category")->whereHas('user', function ($query) use ($userID) {
            $query->where('user_id', $userID);
        })->get();
        return $data;
    }

    public function prj_chart()
    {
        $projects = Project::selectRaw('DATE_FORMAT(created_at, "%Y-%m") as month, COUNT(*) as count')
        ->groupBy('month')
        ->orderBy('month')
        ->get();

        return $projects;
    }
}
