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
        if ($request->has('image')) {
            $file = $request->image;
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('uploads'), $file_name);
        }
        $request->merge(['image' => $file_name]);

        $category_level3 = Level3_Product::create(([
            'image' => $file_name,
            'tittle' => $request->input('tittle'),
            'display' => $request->input('display'),
            'level1_product_id' => $request->input('level1_product_id'),
            'level2_product_id' => $request->input('level2_product_id'),
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
    public function edit($id)
    {
        $category_level3 = Level3_Product::with(['seo', 'level1_product', 'level2_product'])->find($id);
        $category_level1 = Level1_Product::all();
        $category_level2 = Level2_Product::all();
        return view('admin.category.category_level3_edit', compact('category_level2', 'category_level1', 'category_level3'));
    }
    public function update(Request $request, $id)
    {
        $category_level3 = Level3_Product::findOrFail($id);
        $seo = $category_level3->seo;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->storeAs('uploads', $imageName, 'public');
            $category_level3->image = $imageName;
        }
        $category_level3->tittle = $request->input('tittle');
        $category_level3->level1_product_id = $request->input('level1_product_id');
        $category_level3->level2_product_id = $request->input('level2_product_id');
        $category_level3->display = $request->has('display');
        $category_level3->seo_id = $request->input('seo_id');
        $category_level3->save();
        $seo->tittle = $request->input('tittle');
        $seo->keyword = $request->input('keyword');
        $seo->description = $request->input('description');

        $seo->save();

        return back();
    }
    public function destroy($id)
    {
        $category_level3 = Level3_Product::find($id);

        $category_level3->delete();
        return back();
    }
}
