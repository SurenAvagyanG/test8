<?php

namespace App\Http\Requests\Product;

use Fifth\Generator\Http\Requests\DataPersistRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class StoreRequest extends DataPersistRequest
{
    private $product;

    public function authorizationRules()
    {
        return [
            'default' => Auth::user()->can('store', Product::class)
        ];
    }

    public function rules(): array
    {
        return [

        ];
    }

    public function persist(): self
    {
        $this->product = Product::create($this->getProcessedData());

        return $this;
    }

    public function getProduct(): Product
    {
        return $this->product;
    }
}
