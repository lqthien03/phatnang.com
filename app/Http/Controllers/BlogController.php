<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level1Product;
use App\Models\Level2Product;
use App\Models\Level3Product;
use App\Models\Blogs;
use App\Models\Policy;

class BlogController extends Controller
{
    public function all(){
        $policy = Policy::all();
        $level1products = Level1Product::all();
        $level2products = Level2Product::where('level1products_id',0);
        $level3products = Level3Product::where('level2products_id',0);
        $blogs = Blogs::all();
        return view('blog', compact('blogs','level1products','level2products','level3products','policy'));
    }
    public function show(){
        $blog = Blogs::all();
        return view('admin.blog', compact('blog'));
    }
    public function detail($id){
        $policy = Policy::all();
        $level1products = Level1Product::all();
        $level2products = Level2Product::where('level1products_id',0);
        $level3products = Level3Product::where('level2products_id',0);
        $blog = Blogs::findOrFail($id);
        $blogs = Blogs::all();
        return view('detail-blog',compact('blog','level1products','level2products','level3products','policy','blogs'));
    }
}
