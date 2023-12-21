<?php

namespace App\Http\Controllers;

use App\Models\Level1_Product;
use App\Models\Quotation;
use App\Models\Seo;
use Illuminate\Http\Request;

class QuotationController extends Controller
{
    public function show()
    {
        $quatation = Quotation::all();
        return view('admin.quotation.quotation', compact('quatation'));
    }
    public function create()
    {
        $quatation = Quotation::all();
        $category_level1 = Level1_Product::all();
        return view('admin.quotation.quotation_create', compact('quatation', 'category_level1'));
    }
    public function store(Request $request)
    {
        $quatation = Quotation::create(([
            'tittle' => $request->input('tittle'),
            'display' => $request->input('display'),
            'level1_product_id' => $request->input('level1_product_id'),
            'link_product' => $request->input('link_product'),
            'unit_price' => $request->input('unit_price'),
            'wholesale_price' => $request->input('wholesale_price'),
            'guarantee' => $request->input('guarantee'),
        ]));

        $seo = Seo::create($request->only([
            'tittle',
            'keyword',
            'description',
        ]));
        $quatation->seo()->associate($seo);
        $quatation->save();

        return redirect()->route('show.quotation')->with('success', 'Bản ghi đã được tạo thành công!');
    }
    public function edit($id)
    {
        $quatation = Quotation::with(['seo', 'level2_product'])->find($id);
        $category_level1 = Level1_Product::all();
        return view('admin.quotation.quotation_edit', compact('quatation', 'category_level1'));
    }
    public function update(Request $request, $id)
    {
        // dd($request);
        $quatation = Quotation::findOrFail($id);
        $seo = $quatation->seo;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->storeAs('uploads', $imageName, 'public');
            $quatation->image = $imageName;
        }
        $quatation->tittle = $request->input('tittle');
        $quatation->display = $request->has('display');
        $quatation->link_product = $request->input('link_product');
        $quatation->unit_price = $request->input('unit_price');
        $quatation->wholesale_price = $request->input('wholesale_price');
        $quatation->guarantee = $request->input('guarantee');
        $quatation->level1_product_id = $request->input('level1_product_id');
        $quatation->seo_id = $request->input('seo_id');
        $quatation->save();

        $seo->tittle = $request->input('tittle');
        $seo->keyword = $request->input('keyword');
        $seo->description = $request->input('description');
        $seo->save();

        return back();
    }
    public function destroy($id)
    {
        $quatation = Quotation::find($id);
        $quatation->delete();
        return back();
    }
}
