<?php

namespace App\Http\Controllers\Api\User;

use App\Models\User;
use App\Http\Requests\User\IndexRequest;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\ShowRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Http\Requests\User\DestroyRequest;
use App\Http\DataProviders\User\IndexDataProvider;
use App\Transformers\UserTransformer;
use Fifth\Generator\Http\ApiController;

class UserController extends ApiController
{
    public function index(IndexRequest $request, IndexDataProvider $provider): array
    {
        return UserTransformer::pagination(
            $provider->getData(),
            'simpleTransform'
        );
    }

    public function store(StoreRequest $request): array
    {
        return UserTransformer::simple(
            $request->persist()->getUser()
        );
    }

    public function show(ShowRequest $request, User $user): array
    {
        return UserTransformer::simple($request->getUser());
    }

    public function update(UpdateRequest $request, User $user): array
    {
        return UserTransformer::simple(
            $request->persist()->getUser()
        );
    }

    public function destroy(DestroyRequest $request, User $user): array
    {
       return $request->manage()->getResponseMessage();
    }
}
