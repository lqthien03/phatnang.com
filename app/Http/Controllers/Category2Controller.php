<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCategory2Request;
use App\Models\Level1_Product;
use App\Models\Level2_Product;
use App\Models\Seo;
use Illuminate\Http\Request;

class Category2Controller extends Controller
{
    public function show()
    {
        $category_level2 = Level2_Product::all();

        // dd($category_level2);
        return view('admin.category.category_level2', compact('category_level2'));
    }
    public function create()
    {
        // $category_level2 = Level2_Product::with(['seo'])->get();
        $category_level2 = Level1_Product::all();
        // dd($category_level2);
        return view('admin.category.category_level2_create', compact('category_level2'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'image' => 'required',
            'tittle' => 'required',
            'display' => 'required',
            'keyword' => 'required',
            'description' => 'required',
            'level1_product_id' => 'required|exists:level1_products,id',

        ]);

        $category_level2 = Level2_Product::create($request->only([
            'image',
            'tittle',
            'display',
        ]));
        $seo = Seo::create($request->only([
            'tittle',
            'keyword',
            'description',
        ]));
        $category_level2->seo()->associate($seo);
        $category_level2->save();
        return redirect()->route('show.category2')->with('success', 'Bản ghi đã được tạo thành công!');
    }

    public function edit(Level2_Product $category_level2)
    {
        return view('admin.category.category_level2_edit', compact('$category_level2'));
    }

    public function update(Level2_Product $category_level2, UpdateCategory2Request $request)
    {
    }

    public function destroy($id)
    {
        $category_level2 = Level2_Product::find($id);
        $category_level2->delete();

        return back();
    }
}
