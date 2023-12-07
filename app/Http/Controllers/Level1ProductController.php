<?php

namespace App\Http\Controllers;
use App\Models\Level1Product;
use Illuminate\Http\Request;

class Level1ProductController extends Controller
{
    public function all(){
        $level1products = Level1Product::all();
        return view('index', compact('level1products'));
    }
    public function alladmin(){
        $level1products = Level1Product::all();
        return view('admin.productlv1', compact('level1products'));
    }
}
