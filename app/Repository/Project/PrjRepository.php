<?php

namespace App\Repository\Project;
use App\Models\Project;

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
}