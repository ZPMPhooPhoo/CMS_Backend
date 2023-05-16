<?php

namespace App\Repository\Quotation;
use App\Models\Quotation;

class QuotationRepository implements QuotationRepoInterface
{
    public function get()
    {
        $data = Quotation::all();
        return $data;
    }

    public function show($id)
    {
        $data = Quotation::where('id', $id)->first();
        return $data;
    }
}