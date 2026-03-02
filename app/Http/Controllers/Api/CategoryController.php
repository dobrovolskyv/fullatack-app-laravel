<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Category\StoreRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;


class CategoryController extends Controller
{
    public function index()
    {
        return CategoryResource::collection(Category::all())->response();
    }

    public function show(Category $category)
    {
        return $category;
    }

    public function store(StoreRequest $request)
    {
        $data=$request->validated();
        $category=Category::create($data);
        return $category;
    }

    public function update(StoreRequest $request, Category $category)
    {

    }

    public function destroy(Category $category)
    {

    }
}
