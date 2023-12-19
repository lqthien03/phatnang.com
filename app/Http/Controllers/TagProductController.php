<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateTagProductRequest;
use App\Models\Seo;
use App\Models\Tag_Product;
use Illuminate\Http\Request;

class TagProductController extends Controller
{
    public function show()
    {
        $tag_product = Tag_Product::all();
        // dd($tag_product);
        return view('admin.category.tag_product', compact('tag_product'));
    }

    public function create()
    {
        $tag_product = Tag_Product::all();
        return view('admin.category.tag_product_create', compact('tag_product'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'image' => 'required',
        //     'tittle' => 'required',
        //     'display' => 'integer',
        // ]);
        if ($request->has('image')) {
            $file = $request->image;
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('uploads'), $file_name);
        }
        $request->merge(['image' => $file_name]);

        $tag_product = Tag_Product::create(([
            'image'=> $file_name,
            'tittle' => $request->input('tittle'),
            'display'=> $request->input('display'),
        ]));

        $seo = Seo::create($request->only([
            'tittle',
            'keyword',
            'description',
        ]));

        $tag_product->seo()->associate($seo);
        $tag_product->save();
        return redirect()->route('show.tag_product')->with('success', 'Bản ghi đã được tạo thành công!');
    }
    public function edit(Tag_Product $tag_Product)
    {
        return view('admin.category.tag_product_edit', compact('tag_Product'));
    }
    public function update(Tag_Product $tag_Product, UpdateTagProductRequest $request)
    {
        $validated = $request->validated();
        $tag_Product->update($request->all());
        return back();
    }

    public function destroy($id)
    {
        $tag_Product = Tag_Product::find($id);

        $tag_Product->delete();
        return back();
    }
}
