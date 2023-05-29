<?php

namespace App\Repository\Project;

interface PrjRepoInterface
{
    public function get();
    public function prj_chart();
    public function show($id);
}
