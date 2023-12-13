<?php

namespace App\Http\Controllers;

use App\Models\Level1_Product;
use App\Models\Quotation;
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
        $request->validate([
            'image' => 'required',
            'tittle' => 'required',
            'display' => 'required',
        ]);

        $quatation = Quotation::create($request->all());
        return redirect()->route('create.quotation')->with('success', 'Bản ghi đã được tạo thành công!');
    }
    public function edit(Quotation $quotation)
    {
    }
    public function update()
    {
    }
    public function destroy($id)
    {
        $quatation = Quotation::find($id);
        $quatation->delete();
        return back();
    }
}
