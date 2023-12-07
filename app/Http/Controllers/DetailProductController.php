<?php

namespace App\Http\Controllers;
use App\Models\DetailProduct;
use Illuminate\Http\Request;

class DetailProductController extends Controller
{
    public function all(){
        $detail = DetailProduct::all();
        return view('products', compact('detail'));
    }
    public function detail($id){
        return view('detail-product', ['detail' => DetailProduct::findOrFail($id)]);
    }
}
