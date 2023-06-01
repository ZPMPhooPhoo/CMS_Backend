<?php
namespace App\Services\Invoice;

use App\Models\Invoice;
use App\Services\Invoice\InvoiceServiceInterface;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class InvoiceService implements InvoiceServiceInterface
{
    public function store($request)
    {
        $data =  Invoice::create($request);
        return $data;
    }

    public function update($request, $id)
    {
        $category = Invoice::where('id', $id)->first();
        $data = $category->update($request);
        return $data;
    }

    public function delete($id)
    {
        $data = Invoice::where('id', $id)->first();
        return $data->delete();
    }
}