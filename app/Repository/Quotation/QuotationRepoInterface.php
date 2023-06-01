<?php

namespace App\Repository\Quotation;

interface QuotationRepoInterface
{
    public function get();
    public function show($id);
    public function quotation_edit($id);
}
