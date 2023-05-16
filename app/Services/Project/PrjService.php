<?php
namespace App\Services\Project;

use App\Models\Project;
use App\Services\Project\PrjServiceInterface;

class PrjService implements PrjServiceInterface
{
    public function store($request)
    {        
        return Project::create($request);
    }

    public function update($request, $id){
        $project = Project::where('id', $id)->first();
        return $project->update($request);
    }

    public function delete($id)
    {
        $data = Project::where('id', $id)->first();
        return $data->delete();
    }
}