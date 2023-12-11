<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCategory1Request;
use App\Models\Category1;
use App\Models\Level1_Product;
use Illuminate\Http\Request;

class Category1Controller extends Controller
{
    public function show()
    {
        $category_level1 = Level1_Product::all();
        return view('admin.category.category_level1', compact('category_level1'));
    }
    public function create()
    {
        $category_level1 =  Level1_Product::all();
        return view('admin.category.category_level1_create', compact('category_level1'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'tittle' => 'required',
            'outstand' => 'required',
            'display' => 'required',
        ]);

        $category_level1 = Level1_Product::create($request->all());
        return redirect()->route('show.category1')->with('success', 'Bản ghi đã được tạo thành công!');
    }

    public function edit(Level1_Product $category_level1)
    {
        return view('admin.category.category_level1_edit', compact('category_level1'));
    }
    public function update(Level1_Product $category_level1, UpdateCategory1Request $request)
    {
    }

    public function destroy($id)
    {
        $category_level1 = Level1_Product::find($id);

        $category_level1->delete();
        return back();
    }
}
