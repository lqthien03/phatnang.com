<?php

namespace App\Http\Controllers;
use App\Models\Level1Product;
use App\Models\Level2Product;
use App\Models\Level3Product;
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
    }
}
