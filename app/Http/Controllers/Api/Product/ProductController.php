<?php

namespace App\Http\Controllers\Api\Product;

use App\Models\Product;
use App\Http\Requests\Product\IndexRequest;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\ShowRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Http\Requests\Product\DestroyRequest;
use App\Http\DataProviders\Product\IndexDataProvider;
use App\Transformers\ProductTransformer;
use Fifth\Generator\Http\ApiController;

class ProductController extends ApiController
{
    public function index(IndexRequest $request, IndexDataProvider $provider): array
    {
        return ProductTransformer::pagination(
            $provider->getData(),
            'simpleTransform'
        );
    }

    public function store(StoreRequest $request): array
    {
        return ProductTransformer::simple(
            $request->persist()->getProduct()
        );
    }

    public function show(ShowRequest $request, Product $product): array
    {
        return ProductTransformer::simple($request->getProduct());
    }

    public function update(UpdateRequest $request, Product $product): array
    {
        return ProductTransformer::simple(
            $request->persist()->getProduct()
        );
    }

    public function destroy(DestroyRequest $request, Product $product): array
    {
       return $request->manage()->getResponseMessage();
    }
}
