<?php

namespace App\Http\Controllers;
use App\Models\Policy;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function show(){
        $policy = Policy::all();
        return view('admin.policy', compact('policy'));
    }
    public function edit(Policy $id){
         $policy = Policya::findOrFail($id);
         return view('admin.policy.edit', compact('policy'));
    }
}
