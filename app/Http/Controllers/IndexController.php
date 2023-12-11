<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level1Product;
use App\Models\Level2Product;
use App\Models\Level3Product;
use App\Models\DetailProduct;

class IndexController extends Controller
{
    public function all(){
        $level1products = Level1Product::all();
        $level2products = Level2Product::where('level1products_id',0);
        $level3products = Level3Product::where('level2products_id',0);
        $detail = DetailProduct::where('level1_products_id',0)->take(4)->get();
        $details = DetailProduct::all();
        return view('index',  compact('level2products', 'level1products', 'level3products', 'detail', 'details'));
    }
}
