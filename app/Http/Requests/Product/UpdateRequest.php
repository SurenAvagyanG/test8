<?php

namespace App\Http\Requests\Product;

use Fifth\Generator\Http\Requests\DataPersistRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class UpdateRequest extends DataPersistRequest
{
    public function authorizationRules()
    {
        return [
            'default' => Auth::user()->can('update', $this->product)
        ];
    }

    public function rules(): array
    {
        return [

        ];
    }

    public function persist(): self
    {
        $this->product->safeUpdate($this->getProcessedData());

        return $this;
    }

    public function getProduct(): Product
    {
        return $this->product;
    }
}
