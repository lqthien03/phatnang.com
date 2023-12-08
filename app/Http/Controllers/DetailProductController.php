<?php

namespace App\Http\Controllers;
use App\Models\DetailProduct;
use Illuminate\Http\Request;

class DetailProductController extends Controller
{
    public function index(){
        $detail = DetailProduct::all();
        return view('index', compact('detail'));
    }
    public function all(){
        $detail = DetailProduct::all();
        return view('products', compact('detail'));
    }
    public function allinonelv1(){
        $id = $_GET['id'];
        $detail = DetailProduct::where('level1_products_id',$id)->get();
        return view('products', compact('detail'));
    }
    public function allinonelv3(){
        $id = $_GET['id'];
        $detail = DetailProduct::where('level3_products_id',$id)->get();
        return view('products', compact('detail'));
    }
    public function detail($id){
        return view('detail-product', ['detail' => DetailProduct::findOrFail($id)]);
    }
}
