<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCategory1Request;
use App\Models\Category1;
use App\Models\Level1_Product;
use App\Models\Seo;
use Illuminate\Http\Request;

class Category1Controller extends Controller
{
    public function show()
    {
        $category_level1 = Level1_Product::all();
        // 9
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
            'display' => 'integer',
            'describe' => 'required',
            'image' => 'required',
            'keyword' => 'required',
            'description' => 'required',
        ]);

        // dd($request);

        $category_level1 = Level1_Product::create($request->only([
            'image',
            'tittle',
            'display',
            'describe',
        ]));

        $seo = Seo::create($request->only([
            'tittle',
            'keyword',
            'description',
        ]));
        // dd($category_level1);
        $category_level1->seo()->associate($seo);
        $category_level1->save();


        return redirect()->route('show.category1')->with('success', 'Bản ghi đã được tạo thành công!');
    }

    public function edit($id)
    {
        $category_level1 = Level1_Product::with(['seo'])->find($id);
        // dd($category_level1);
        return view('admin.category.category_level1_edit', compact('category_level1'));
    }
    public function update(Level1_Product $category_level1, UpdateCategory1Request $request)
    {
        dd($category_level1);
        $validated = $request->validated();
        $category_level1->update($request->all());
        return back();
    }

    public function destroy($id)
    {
        $category_level1 = Level1_Product::find($id);

        $category_level1->delete();
        return back();
    }
}
