<?php

namespace App\Repository\Project;
use App\Models\Project;
// use Carbon\Carbon;

class PrjRepository implements PrjRepoInterface
{
    public function get()
    {
        $data = Project::all();
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

    public function show($id)
    {
        $data = Project::where('id', $id)->first();
        return $data;
    }
}
