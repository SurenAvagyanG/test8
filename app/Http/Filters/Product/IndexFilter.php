<?php

namespace App\Http\Filters\Product;

use Fifth\Generator\Http\Filters\AbstractFilter;

class IndexFilter extends AbstractFilter
{
    protected $orderColumnMap = [

    ];

    public function rules(): array
    {
        return [
			'search' => $this->searchParams([]),

        ];
    }
}
