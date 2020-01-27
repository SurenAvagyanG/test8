<?php

namespace App\Http\Requests\User;

use Fifth\Generator\Http\Requests\DataPersistRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UpdateRequest extends DataPersistRequest
{
    public function authorizationRules()
    {
        return [
            'default' => Auth::user()->can('update', $this->user)
        ];
    }

    public function rules(): array
    {
        return [

        ];
    }

    public function persist(): self
    {
        $this->user->safeUpdate($this->getProcessedData());

        return $this;
    }

    public function getUser(): User
    {
        return $this->user;
    }
}
