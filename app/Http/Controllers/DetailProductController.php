<?php

namespace App\Http\Controllers;
use App\Models\DetailProduct;
use Illuminate\Http\Request;
use App\Models\Level1Product;
use App\Models\Level2Product;
use App\Models\Level3Product;

use App\Http\Controller\Level1ProductController;

class DetailProductController extends Controller
{
    public function index(){
        $detail = DetailProduct::all();
        return view('index', compact('detail'));
    }
    public function all(){
        $level1products = Level1Product::all();
        $level2products = Level2Product::where('level1products_id',0);
        $level3products = Level3Product::where('level2products_id',0);
        $detail = DetailProduct::all();
        return view('products', compact('detail','level1products','level2products','level3products'));
    }
    public function allinonelv1(){
        $id = $_GET['id'];
        $detail = DetailProduct::where('level1_products_id',$id)->get();
        $level1products = Level1Product::all();
        return view('products', compact('detail','level1products'));
    }
    public function allinonelv3(){
        $level1products = Level1Product::all();
        $level2products = Level2Product::where('level1products_id',0);
        $level3products = Level3Product::where('level2products_id',0);
        $id = $_GET['id'];
        $detail = DetailProduct::where('level3_products_id',$id)->get();
        return view('products', compact('detail','level1products','level2products','level3products'));
    }
    public function detail($id){
        $level1products = Level1Product::all();
        $level2products = Level2Product::where('level1products_id',0);
        $level3products = Level3Product::where('level2products_id',0);
        $detail = DetailProduct::findOrFail($id);
        return view('detail-product', compact('detail', 'level1products', 'level2products', 'level3products'));
    }
}
