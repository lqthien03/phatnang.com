<?php

namespace App\Http\Controllers;
use App\Models\Quotation;
use Illuminate\Http\Request;

class QuotationController extends Controller
{
    public function all(){
        $level1products = Level1Product::all();
        $level2products = Level2Product::where('level1products_id',0);
        $level3products = Level3Product::where('level2products_id',0);
        // $quotation = Quotation::all();
        return view('quotation', compact('level1products','level2products','level3products'));
    public function show()
    {
        $quatation = Quotation::all();
        return view('admin.quotation.quotation', compact('quatation'));
    }
    public function create()
    {
    }
    public function store()
    {
    }
    public function edit()
    {
    }
    public function update()
    {
    }
    public function delete()
    {
    }
}
