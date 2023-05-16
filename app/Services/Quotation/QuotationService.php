<?php
namespace App\Services\Quotation;

use App\Models\Quotation;
use App\Services\Quotation\QuotationServiceInterface;

class QuotationService implements QuotationServiceInterface
{
    public function store($request)
    {        
        return Quotation::create($request);
    }

    public function update($request, $id){
        $quotation = Quotation::where('id', $id)->first();
        return $quotation->update($request);
    }

    public function delete($id)
    {
        $data = Quotation::where('id', $id)->first();
        return $data->delete();
    }
}