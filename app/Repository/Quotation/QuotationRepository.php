<?php

namespace App\Repository\Quotation;

use App\Models\Quotation;

class QuotationRepository implements QuotationRepoInterface
{
    public function get()
    {
        $data = Quotation::all();

        $quotations = $data->map(function ($quotation) {
            return [
                'id' => $quotation->id,
                'quotation' => $quotation->quotation,
                'is_agree' => $quotation->is_agree,
                'quotation_date' => $quotation->quotation_date,
                'project_id' => $quotation->project_id,
                'contract_url' => $quotation->quotation ? url("storage/quotations/{$quotation->quotation}") : null,
            ];
        });
        return $quotations;
    }

    public function show($project_id)
    {
        $quotations = Quotation::where('project_id', $project_id)->get();

        $result = $quotations->map(function ($quotation) {
            return [
                'id' => $quotation->id,
                'description' => $quotation->description,
                'quotation' => $quotation->quotation,
                'is_agree' => $quotation->is_agree,
                'quotation_date' => $quotation->quotation_date,
                'project_id' => $quotation->project_id,
                'quotation_url' => $quotation->quotation ? url("storage/quotations/{$quotation->quotation}") : null,
            ];
        });

        return $result;
    }
    public function quotation_edit($id)
    {
        $data = Quotation::where('id', $id)->first();
        return [
            'description' => $data->description,
            'quotation' => $data->quotation,
            'is_agree' => $data->is_agree,
            'quotation_date' => $data->quotation_date,
            'quotation_url' => $data->quotation ? url("storage/quotations/{$data->quotation}") : null,
        ];
    }
}
