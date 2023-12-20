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
        // dd($request);
        if ($request->has('image')) {
            $file = $request->image;
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('uploads'), $file_name);
        }
        $request->merge(['image' => $file_name]);
        $product = Product::create(([
            'image' => $file_name,
            'tittle' => $request->input('tittle'),
            'display' => $request->input('display'),
            'gallery' => $request->input('gallery'),
            'outstand' => $request->input('outstand'),
            'selling' => $request->input('selling'),
            'new' => $request->input('new'),
            'describe' => $request->input('describe'),
            'discount' => $request->input('discount'),
            'price' => $request->input('price'),
            'new_price' => $request->input('new_price'),
            'content' => $request->input('content'),
            'product_code' => $request->input('product_code'),
            'level1_product_id' => $request->input('level1_product_id'),
            'level2_product_id' => $request->input('level2_product_id'),
            'level3_product_id' => $request->input('level3_product_id'),
            'tag_product_id' => $request->input('tag_product_id'),

        ]));
        // dd($product);
        $seo = Seo::create($request->only([
            'tittle',
            'keyword',
            'description',
        ]));
        $product->seo()->associate($seo);
        $product->save();

        return redirect()->route('show.product')->with('success', 'Bản ghi đã được tạo thành công!');
    }
    public function edit($id)
    {
        $product = Product::with(['seo', 'level1_product', 'level2_product', 'level3_product', 'tag_product'])->find($id);
        $tag_product = Tag_Product::all();
        $category_level3 =  Level3_Product::all();
        $category_level2 =  Level2_Product::all();
        $category_level1 =  Level1_Product::all();
        return view('admin.category.product_edit', compact('product', 'tag_product', 'category_level3', 'category_level2', 'category_level1',));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $seo = $product->seo;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->storeAs('uploads', $imageName, 'public');
            $product->image = $imageName;
        }
        $product->tittle = $request->input('tittle');
        $product->product_code = $request->input('product_code');
        $product->discount = $request->input('discount');
        $product->price = $request->input('price');
        $product->new_price = $request->input('new_price');
        $product->content = $request->input('content');
        $product->level1_product_id = $request->input('level1_product_id');
        $product->level2_product_id = $request->input('level2_product_id');
        $product->level3_product_id = $request->input('level3_product_id');
        $product->tag_product_id = $request->input('tag_product_id');
        $product->display = $request->has('display');
        $product->gallery = $request->has('gallery');
        $product->outstand = $request->has('outstand');
        $product->new = $request->has('new');
        $product->selling = $request->has('selling');
        $product->seo_id = $request->input('seo_id');
        $product->save();

        $seo->tittle = $request->input('tittle');
        $seo->keyword = $request->input('keyword');
        $seo->description = $request->input('description');
        $seo->save();

        return back();
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return back();
    }
    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
            $request->file('upload')->move(public_path('media'), $fileName);
            $url = asset('media/' . $fileName);
        }
    }
}
