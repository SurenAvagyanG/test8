<?php

namespace App\Http\Requests\User;

use Illuminate\Support\Facades\Auth;
use Fifth\Generator\Http\Requests\BaseRequest;

class DestroyRequest extends BaseRequest
{
    public function authorizationRules()
    {
        return [
            'default' => Auth::user()->can('destroy', $this->user)
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
        $this->user->delete();

        return $this;
    }

    protected function getMessage(): string
    {
        return "User successfully deleted.";
    }
}
