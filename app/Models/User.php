<?php

namespace App\Models;

use App\Models\Fragments\User\Relations;
use App\Models\Fragments\User\Scopes;
use Fifth\Generator\Common\BaseModel;

class User extends BaseModel
{
    use Relations, Scopes;

    protected $fillable = [
        
    ];
}
