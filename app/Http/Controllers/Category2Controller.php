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
        if ($request->has('image')) {
            $file = $request->image;
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('uploads'), $file_name);
        }

        $request->merge(['image' => $file_name]);

        $category_level2 = Level2_Product::create(([
            'image' => $file_name,
            'tittle' => $request->input('tittle'),
            'display' => $request->input('display'),
            'level1_product_id' => $request->input('level1_product_id')
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

    public function edit($id)
    {
        $category_level2 = Level2_Product::with(['seo', 'level2_product'])->find($id);
        $category_level1 = Level1_Product::all();
        return view('admin.category.category_level2_edit', compact('category_level2', 'category_level1'));
    }

    public function update(Request $request, $id)
    {
        $category_level2 = Level2_Product::findOrFail($id);
        $seo = $category_level2->seo;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->storeAs('uploads', $imageName, 'public');
            $category_level2->image = $imageName;
        }
        $category_level2->tittle = $request->input('tittle');
        $category_level2->level1_product_id = $request->input('level1_product_id');
        $category_level2->display = $request->has('display');
        $category_level2->seo_id = $request->input('seo_id');

        $seo->tittle = $request->input('tittle');
        $seo->keyword = $request->input('keyword');
        $seo->description = $request->input('description');
        $category_level2->save();
        $seo->save();
        return back();
    }

    public function destroy($id)
    {
        $category_level2 = Level2_Product::find($id);
        $category_level2->delete();

        return back();
    }
}
