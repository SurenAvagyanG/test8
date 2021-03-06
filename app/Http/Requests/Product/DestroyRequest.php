<?php

namespace App\Http\Requests\Product;

use Illuminate\Support\Facades\Auth;
use Fifth\Generator\Http\Requests\BaseRequest;

class DestroyRequest extends BaseRequest
{
    public function authorizationRules()
    {
        return [
            'default' => Auth::user()->can('destroy', $this->product)
        ];
    }

    public function rules(): array
    {
        return [
            //
        ];
    }

    public function manage(): self
    {
        $this->product->delete();

        return $this;
    }

    protected function getMessage(): string
    {
        return "Product successfully deleted.";
    }
}
