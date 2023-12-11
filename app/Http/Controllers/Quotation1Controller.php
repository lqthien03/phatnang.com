<?php

namespace App\Http\Controllers;

use App\Models\Level1_Quotation;
use Illuminate\Http\Request;

class Quotation1Controller extends Controller
{
    public function show(){
        $quotation = Level1_Quotation::all();
        return view('admin.quotation.category_level1',compact('quotation'));
    }
    public function create(){
        
    }

    public function store(){

    }

    public function edit(){

    }

    public function update(){

    }

    public function delete(){

    }
}
