<?php

namespace App\Http\Requests\User;

use Fifth\Generator\Http\Requests\DataPersistRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class StoreRequest extends DataPersistRequest
{
    private $user;

    public function authorizationRules()
    {
        return [
            'default' => Auth::user()->can('store', User::class)
        ];
    }

    public function rules(): array
    {
        return [

        ];
    }

    public function persist(): self
    {
        $this->user = User::create($this->getProcessedData());

        return $this;
    }

    public function getUser(): User
    {
        return $this->user;
    }
}
