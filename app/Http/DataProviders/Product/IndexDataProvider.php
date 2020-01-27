<?php

namespace App\Http\DataProviders\Product;

use App\Http\Filters\Product\IndexFilter;
use App\Models\Product;
use Fifth\Generator\Http\DataProviders\DataProvider;

class IndexDataProvider extends DataProvider
{
    public function __construct(IndexFilter $filter)
    {
        $this->init($filter);
    }

    public function setBuilder()
    {
        $this->builder = Product::filterUsing($this->filter);
    }
}
