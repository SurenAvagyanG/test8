<?php

namespace App\Http\Requests\User;

use Fifth\Generator\Http\Requests\BaseRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ShowRequest extends BaseRequest
{
    public function authorizationRules()
    {
        return [
            'default' => Auth::user()->can('view', $this->user)
        ];
    }

    public function rules(): array
    {
        return [
            //
        ];
    }

    public function getUser(): User
    {
        return $this->user;
    }
}
