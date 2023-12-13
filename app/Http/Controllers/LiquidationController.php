<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Liquidation;
use App\Models\Policy;
use App\Models\Level1Product;
use App\Models\Level2Product;
use App\Models\Level3Product;

class LiquidationController extends Controller
{
    public function all(){
        $policy = Policy::all();
        $level1products = Level1Product::all();
        $level2products = Level2Product::where('level1products_id',0);
        $level3products = Level3Product::where('level2products_id',0);
        $liquidations = Liquidation::all();
        return view('liquidation', compact('liquidations','policy','level1products','level2products','level3products'));
    }
    public function detail($id){
        $policy = Policy::all();
        $level1products = Level1Product::all();
        $level2products = Level2Product::where('level1products_id',0);
        $level3products = Level3Product::where('level2products_id',0);
        $liquidation = Liquidation::findOrFail($id);
        $cungloai = Liquidation::all();
        return view('detail-liquidation', compact('liquidation', 'level1products', 'level2products', 'level3products','policy','cungloai'));
    }
}
