<?php

namespace App\Http\Controllers;
use App\Models\Quotation;
use Illuminate\Http\Request;
use App\Models\Level1Product;
use App\Models\Level2Product;
use App\Models\Level3Product;
class QuotationController extends Controller
{
    public function all(){
        $level1products = Level1Product::all();
        $level2products = Level2Product::where('level1products_id',0);
        $level3products = Level3Product::where('level2products_id',0);
        // $quotation = Quotation::all();
        return view('quotation', compact('level1products','level2products','level3products'));
    }
    public function show()
    {
        $quatation = Quotation::all();
        return view('admin.quotation.quotation', compact('quatation'));
    }
    public function create()
    {
        $quatation = Quotation::all();
        return view('admin.quotation.quotation_create', compact('quatation'));
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
