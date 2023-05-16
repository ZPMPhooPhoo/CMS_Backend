<?php

namespace App\Repository\Project;

interface PrjRepoInterface
{
    public function get();
    public function show($id);
}