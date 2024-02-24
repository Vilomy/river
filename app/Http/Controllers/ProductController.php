<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Http\Resources\Product\ProductResource;
use App\Models\Product;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    public function index()
    {
        return ProductResource::collection(Product::all())->resolve();
    }
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $product = Product::create($data);
        return ProductResource::make($product)->resolve();
    }
    public function show(Product $product)
    {
        return ProductResource::make($product)->resolve();
    }
    public function update(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();
        $product->update($data);
        $product = $product->fresh();
        return ProductResource::make($product)->resolve();
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return response(Response::HTTP_OK);
    }
}
