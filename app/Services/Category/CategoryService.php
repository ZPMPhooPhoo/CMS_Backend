<?php
namespace App\Services\Category;

use App\Models\Category;
use App\Services\Category\CategoryServiceInterface;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class CategoryService implements CategoryServiceInterface
{
    public function store($request)
    {
        $data =  Category::create($request);
        return $data;
    }

    public function update($request, $id)
    {
        $category = Category::where('id', $id)->first();
        $data =  $category->update($request);
        return $data;
    }

    public function delete($id)
    {
        $data = Category::where('id', $id)->first();
        return $data->delete();
    }
}