<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateTagProductRequest;
use App\Models\Tag_Product;
use Illuminate\Http\Request;

class TagProductController extends Controller
{
    public function show(){
        $tag_product= Tag_Product::all();
        return view('admin.category.tag_product',compact('tag_product'));
    }
    public function edit(Tag_Product $tag_Product){
        return view('admin.category.tag_product_edit',compact('tag_Product'));
    }
    public function update(Tag_Product $tag_Product,UpdateTagProductRequest $request){
        $validated = $request->validated();
        $tag_Product->update($request->all());
        return back();
    }
}
