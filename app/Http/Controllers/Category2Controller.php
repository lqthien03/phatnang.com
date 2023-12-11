<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCategory2Request;
use App\Models\Level2_Product;
use Illuminate\Http\Request;

class Category2Controller extends Controller
{
    public function show()
    {
        $category_level2 = Level2_Product::all();

        // dd($category_level1);
        return view('admin.category.category_level2', compact('category_level2'));
    }
    public function create()
    {
        $category_level2 = Level2_Product::all();
        return view('admin.category.category_level2_create', compact('$category_level2'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'tittle' => 'required',
            'display' => 'required',
            'level3_product_id' => 'required',
        ]);
        $category_level2 = Level2_Product::create($request->all());
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
