<?php

namespace App\Repository\Category;

interface CategoryRepoInterface
{
    public function get();
    public function show($id);
}