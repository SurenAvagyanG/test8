<?php

namespace App\Models;

use App\Models\Fragments\Product\Relations;
use App\Models\Fragments\Product\Scopes;
use Fifth\Generator\Common\BaseModel;

class Product extends BaseModel
{
    use Relations, Scopes;

    protected $fillable = [
        
    ];
}
