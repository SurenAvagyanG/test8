<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Product;
use App\Models\User;
use Fifth\Generator\Http\BasePolicy;

class ProductPolicy extends BasePolicy
{
    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Product $dummyClass)
    {
        return true;
    }

    public function store(User $user)
    {
        return true;
    }

    public function update(User $user, Product $dummyClass)
    {
        return true;
    }

    public function delete(User $user, Product $dummyClass)
    {
        return true;
    }
}
