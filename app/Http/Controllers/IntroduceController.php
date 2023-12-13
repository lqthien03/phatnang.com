<?php

namespace App\Http\Controllers;
use App\Models\Introduce;
use App\Models\Level1Product;
use Illuminate\Http\Request;
use App\Models\Policy;

class IntroduceController extends Controller
{
    public function all(){
        $policy = Policy::all();
        $level1products = Level1Product::all();
        $introduce = Introduce::all();
        return view('introduce',compact('introduce','level1products','policy'));
    }
    public function show(){
        $introduce = Introduce::all();
        return view('admin.static_page.introduce', compact('introduce'));
    }
}
