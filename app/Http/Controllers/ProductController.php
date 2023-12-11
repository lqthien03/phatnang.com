<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        $product = Product::all();
        return view('admin.category.product', compact('product'));
    }
    public function edit(Product $product)
    {
        return view('admin.category.product_edit', compact('product'));
    }

    public function update(Product $product, UpdateProductRequest $request)
    {
        $validated = $request->validated();
        $product->update($request->all());
        return back();
    }
}
