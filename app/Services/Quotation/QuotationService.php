<?php
namespace App\Services\Quotation;

use App\Models\Quotation;
use App\Services\Quotation\QuotationServiceInterface;

class QuotationService implements QuotationServiceInterface
{
    public function store($request)
    {
        dd($request);
        $data = Quotation::create([
            'quotation' => $request['quotation'],
            'description' => $request['description'],
            'is_agree' => $request['is_agree'],
            'quotation_date' => $request['quotation_date'],
            'project_id' => $request['project_id'],
        ]);

        // if ($request['quotation'] ?? false) {
        //     $extension = $request['quotation']->getClientOriginalExtension();
        //     $allowedExtensions = ['jpeg', 'jpg', 'png', 'pdf'];
        
        //     if (!in_array($extension, $allowedExtensions)) {
        //         return false;
        //     }
            
        //     $fileName = $request['quotation']->getClientOriginalName();
        //     $request['quotation']->storeAs('quotations', $fileName);
        
        //     $request['quotation'] = $fileName;
        // }
        // $request['is_agree'] = isset($request['is_agree']) ? 1 : 0;
        $data = Quotation::create($request);
        return $data;
    }

    public function update($request, $id){
        $quotation = Quotation::where('id', $id)->first();
        if($request['quotation'] ?? false){
            $extension = $request['quotation']->getClientOriginalExtension();
            $allowedExtensions = ['jpeg', 'jpg', 'png', 'pdf'];

            if (!in_array($extension, $allowedExtensions)) {
                return false;
            }
        
            $fileName = $request['quotation']->getClientOriginalName();
            $request['quotation']->storeAs('quotations', $fileName);
            $request->merge(['quotation' => $fileName]);
        }
        return $quotation->update($request);
    }

    public function delete($id)
    {
        $data = Quotation::where('id', $id)->first();
        return $data->delete();
    }

    public function upload($request)
    {
        if ($request['quotation'] ?? false) {
            $extension = $request['quotation']->getClientOriginalExtension();
            $allowedExtensions = ['jpeg', 'jpg', 'png', 'pdf'];
        
            if (!in_array($extension, $allowedExtensions)) {
                return false;
            }
            
            $fileName = $request['quotation']->getClientOriginalName();
            $request['quotation']->storeAs('quotations', $fileName);
        
            $request['quotation'] = $fileName;
        }

        $data = Quotation::create([
            'quotation' => $request['quotation'],
            'description' => ['description'],
            'is_agree' => [1],
            'quotation_date' => ['2023-05-24'],
            'project_id' => [2]
        ]);
        
        // $request['is_agree'] = isset($request['is_agree']) ? 1 : 0;
        //$data = Quotation::create($request);
        return $data;
    }
}