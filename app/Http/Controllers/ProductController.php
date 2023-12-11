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
    public function create()
    {
        $product = Product::all();
        return view('admin.category.product_create', compact('product'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'tittle' => 'required',
            'gallery' => 'required',
            'outstand' => 'required',
            'new' => 'required',
            'selling' => 'required',
            'display' => 'required',
        ]);
        $product = Product::create($request->all());
        return view('admin.category.product');
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

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return back();
    }
}
