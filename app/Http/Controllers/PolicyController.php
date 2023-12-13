<?php

namespace App\Http\Controllers;
use App\Models\Level1Product;
use App\Models\Level2Product;
use App\Models\Level3Product;
use App\Models\Policy;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function show(){
        $policy = Policy::all();
        return view('admin.policy', compact('policy'));
    }
    public function edit(Policy $id){
         $policy = Policy::findOrFail($id);
         return view('admin.policy.edit', compact('policy'));
    }
    public function policy($id){
        $policy = Policy::all();
        $level1products = Level1Product::all();
        $level2products = Level2Product::where('level1products_id',0);
        $level3products = Level3Product::where('level2products_id',0);
        $detailpolicy = Policy::findOrFail($id);
        return view('policy', compact('level2products', 'level1products', 'level3products','detailpolicy','policy'));
    }
}
