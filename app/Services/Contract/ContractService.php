<?php
namespace App\Services\Contract;

use App\Models\Contract;
use App\Services\Contract\ContractServiceInterface;

class ContractService implements ContractServiceInterface
{
    public function store($request)
    {
        if(isset($request['contract']))
        {
            $extension=$request['contract']->getClientOriginalExtension();
            $allowedExtensions=['jpeg','jpg','png','pdf'];

            if(!in_array($extension,$allowedExtensions))
            {
                return false;
            }

            $fileName=$request['contract']->getClientOriginalName();
            $request['contract']->storeAs('contracts',$fileName);

            $request['contract']=$fileName;
        }

        // $data=Contract::create([
        //     'contract'=>$request['contract'],
        //     'description'=>$request['description'],
        //     'contract_date'=>$request['contract_date'],
        //     'quotation_id' => $request['quotation_id'],
        // ]);

        $data = Contract::create($request);
        return $data;
        //return Contract::create($request);
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
