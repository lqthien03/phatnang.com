<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProductRequest;
use App\Models\Level1_Product;
use App\Models\Level2_Product;
use App\Models\Level3_Product;
use App\Models\Product;
use App\Models\Seo;
use App\Models\Tag_Product;
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
        $tag_product = Tag_Product::all();
        $category_level3 =  Level3_Product::all();
        $category_level2 =  Level2_Product::all();
        $category_level1 =  Level1_Product::all();
        return view('admin.category.product_create', compact('tag_product', 'category_level3', 'category_level2', 'category_level1'));
    }
    public function store(Request $request)
    {

        $request->validate([
            'image' => 'required',
            'tittle' => 'required',
            'content' => 'required',
            // 'gallery' => 'required',
            'outstand' => 'integer',
            // 'new' => 'required',
            // 'selling' => 'required',
            'display' => 'integer',
            'product_code' => 'required',
            'discount' => 'required',
            'price' => 'required',
            'new_price' => 'required',
            // 'seo_id' => 'required',
            'keyword' => 'required',
            'description' => 'required',
            'level1_product_id' => 'integer',
            'level2_product_id' => 'integer',
            'level3_product_id' => 'integer',
            'tag_product_id' => 'integer',
        ]);
        // dd($request);
        $product = Product::create($request->only([
            'image',
            'tittle',
            'content',
            'gallery',
            'outstand',
            'new',
            'selling',
            'display',
            'product_code',
            'discount',
            'price',
            'new_price',
            'seo_id',
        ]));
        $seo = Seo::create($request->only([
            'tittle',
            'keyword',
            'description',
        ]));
        $product->seo()->associate($seo);
        $product->save();

        return redirect()->route('show.product')->with('success', 'Bản ghi đã được tạo thành công!');
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
