<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\User;
use App\Models\User;
use Fifth\Generator\Http\BasePolicy;

class UserPolicy extends BasePolicy
{
    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, User $dummyClass)
    {
        return true;
    }

    public function store(User $user)
    {
        return true;
    }

    public function update(User $user, User $dummyClass)
    {
        return true;
    }

    public function delete(User $user, User $dummyClass)
    {
        return true;
    }
}
