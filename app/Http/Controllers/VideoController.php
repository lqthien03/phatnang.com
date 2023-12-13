<?php

namespace App\Http\Controllers;
use App\Models\Policy;
use App\Models\Level1Product;
use App\Models\Level2Product;
use App\Models\Level3Product;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    Public function all(){
        $policy = Policy::all();
        $level1products = Level1Product::all();
        $level2products = Level2Product::where('level1products_id',0);
        $level3products = Level3Product::where('level2products_id',0);
        return view('video', compact('policy','level1products','level2products','level3products'));
    }
}
