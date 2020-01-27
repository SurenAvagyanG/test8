<?php

namespace App\Http\Requests\Product;

use Fifth\Generator\Http\Requests\BaseRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class IndexRequest extends BaseRequest
{
    public function authorizationRules()
    {
        return [
            'default' => Auth::user()->can('viewAny', Product::class)
        ];
    }

    public function rules(): array
    {
        return [
            //
        ];
    }
}
