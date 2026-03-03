<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Product\StoreRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Symfony\Component\HttpFoundation\Response;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate(10);
        ProductResource::collection($products);
        return inertia('Product/Index', compact('products'));
    }

    public function show(Product $product)
    {

        return ProductResource::make($product->load('category'))->response();
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $product = Product::create($data);
        return ProductResource::make($product)
            ->response()
            ->setStatusCode(201);
    }

    public function update(StoreRequest $request, Product $product)
    {

        $data = $request->validated();
        $product->update($data);
        return ProductResource::make($product)->response();
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json([
            'message' => 'Product deleted successfully'
        ], Response::HTTP_OK);
    }
}
