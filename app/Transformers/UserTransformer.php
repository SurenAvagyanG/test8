<?php

namespace App\Transformers;

use Fifth\Generator\Common\Transformer;
use Illuminate\Database\Eloquent\Model;

class UserTransformer extends Transformer
{
    public function simpleTransform(Model $model): array
    {
        return [

        ];
    }
}
