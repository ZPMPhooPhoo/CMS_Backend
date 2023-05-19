<?php
namespace App\Services\Project;

use App\Models\Project;
use App\Services\Project\PrjServiceInterface;

class PrjService implements PrjServiceInterface
{
    public function store($request)
    {   
        $data = Project::create($request);
        // $data = Project::create([
        //     'title' => $request['title'],
        //     'description' => $request['description'],
        //     'status' => $request['status'],
        //     'maintenance_active' => $request['maintenance_active'],
        //     'category_id' => $request['category_id'],
        // ]);

        $data->user()->attach($request['users']);
        return $data;
    }

    public function update($request, $id){
        $project = Project::where('id', $id)->first();
        $project->user()->sync($request['users']);
        return $project->update($request);
    }

    public function delete($id)
    {
        $data = Project::where('id', $id)->first();
        return $data->delete();
    }
}