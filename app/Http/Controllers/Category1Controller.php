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
        return view('admin.category.category_level1', compact('category_level1'));
    }
    public function create()
    {
        $category_level1 =  Level1_Product::all();
        return view('admin.category.category_level1_create', compact('category_level1'));
    }

    public function store(Request $request)
    {
        if ($request->has('image')) {
            $file = $request->image;
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('uploads'), $file_name);
        }
        $request->merge(['image' => $file_name]);

        $category_level1 = Level1_Product::create(([
            'image' => $file_name,
            'tittle' => $request->input('tittle'),
            'display' => $request->input('display'),
            'describe' => $request->input('describe'),
        ]));

        $seo = Seo::create($request->only([
            'tittle',
            'keyword',
            'description',
        ]));
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
    public function update(Request $request, $id)
    {
        $category_level1 = Level1_Product::findOrFail($id);
        $seo = $category_level1->seo;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->storeAs('uploads', $imageName, 'public');
            $category_level1->image = $imageName;
        }
        $category_level1->tittle = $request->input('tittle');
        $category_level1->describe = $request->input('describe');
        $category_level1->outstand = $request->has('outstand');
        $category_level1->display = $request->has('display');
        $category_level1->seo_id = $request->input('seo_id');

        $seo->tittle = $request->input('tittle');
        $seo->keyword = $request->input('keyword');
        $seo->description = $request->input('description');
        $category_level1->save();
        $seo->save();
        return back();
    }

    public function destroy($id)
    {
        $category_level1 = Level1_Product::find($id);
        $category_level1->delete();
        return back();
    }
}
