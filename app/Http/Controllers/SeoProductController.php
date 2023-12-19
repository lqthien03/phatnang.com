<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSeoProductRequest;
use App\Models\SeoProduct;
use Illuminate\Http\Request;

class SeoProductController extends Controller
{
    public function edit(SeoProduct $product)
    {
        return view('admin.seo_page.product', compact('product'));
    }

    public function update(SeoProduct $product, UpdateSeoProductRequest $request)
    {
        $validated = $request->validated();
        // dd($validated);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->storeAs('uploads', $imageName, 'public');
            $product->image = $imageName;
        }
        $product->tittle = $request->input('tittle');
        $product->keyword = $request->input('keyword');
        $product->description = $request->input('description');
        $product->save();
        return back();
    }
}
