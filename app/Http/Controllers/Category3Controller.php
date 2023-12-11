<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCategory3Request;
use App\Models\Level3_Product;
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
        $category_level3 =  Level3_Product::all();
        return view('admin.category.category_level3_create', compact('$category_level3'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'tittle' => 'required',
            'display' => 'required',
            'detail_product_id' => 'required',
        ]);

        $category_level3 = Level3_Product::create($request->all());
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
