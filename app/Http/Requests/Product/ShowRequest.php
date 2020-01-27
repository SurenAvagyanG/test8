<?php

namespace App\Http\Requests\Product;

use Fifth\Generator\Http\Requests\BaseRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ShowRequest extends BaseRequest
{
    public function authorizationRules()
    {
        return [
            'default' => Auth::user()->can('view', $this->product)
        ];
    }

    public function rules(): array
    {
        return [
            //
        ];
    }

    public function getProduct(): Product
    {
        return $this->product;
    }
}
