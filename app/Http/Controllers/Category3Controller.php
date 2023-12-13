<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCategory3Request;
use App\Models\Level1_Product;
use App\Models\Level2_Product;
use App\Models\Level3_Product;
use App\Models\Seo;
use Illuminate\Http\Request;

class Category3Controller extends Controller
{
    public function show()
    {
        $category_level3 = Level3_Product::all();
        return view('admin.category.category_level3', compact('category_level3'));
    }

    public function create()
    {
        $category_level2 =  Level2_Product::all();
        $category_level1 =  Level1_Product::all();
        return view('admin.category.category_level3_create', compact('category_level2', 'category_level1'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'image' => 'required',
            'tittle' => 'required',
            'display' => 'integer',
            'keyword' => 'required',
            'description' => 'required',
            'level1_product_id' => 'integer',
            'level2_product_id' => 'integer',
        ]);

        $category_level3 = Level3_Product::create($request->only([
            'image',
            'tittle',
            'display',
            'level1_product_id',
            'level2_product_id',
        ]));
        $seo = Seo::create($request->only([
            'tittle',
            'keyword',
            'description',
        ]));
        $category_level3->seo()->associate($seo);
        $category_level3->save();

        return redirect()->route('show.category3')->with('success', 'Bản ghi đã được tạo thành công!');
    }
    public function edit(Level3_Product $category_level3)
    {
    }
    public function update(Level3_Product $category_level3, UpdateCategory3Request $request)
    {
    }
    public function destroy($id)
    {
        $category_level3 = Level3_Product::find($id);

        $category_level3->delete();
        return back();
    }
}
