<?php

namespace App\Repository\Contract;
use App\Models\Contract;

class ContractRepository implements ContractRepoInterface
{
    public function get()
    {
        $data = Contract::all();
        return $data;
    }

    public function show($id)
    {
        $data = Contract::where('id', $id)->first();
        return $data;
    }
}