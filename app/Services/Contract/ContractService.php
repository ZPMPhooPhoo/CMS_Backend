<?php
namespace App\Services\Contract;

use App\Models\Contract;
use App\Services\Contract\ContractServiceInterface;

class ContractService implements ContractServiceInterface
{
    public function store($request)
    {        
        return Contract::create($request);
    }

    public function update($request, $id){
        $contract = Contract::where('id', $id)->first();
        return $contract->update($request);
    }

    public function delete($id)
    {
        $data = Contract::where('id', $id)->first();
        return $data->delete();
    }
}