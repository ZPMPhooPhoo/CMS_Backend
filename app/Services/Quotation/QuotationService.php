<?php
namespace App\Services\Quotation;

use App\Models\Quotation;
use App\Services\Quotation\QuotationServiceInterface;

class QuotationService implements QuotationServiceInterface
{
    public function store($request)
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
        return Quotation::create($request);
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
}