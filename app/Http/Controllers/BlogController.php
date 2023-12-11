<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level1Product;
use App\Models\Level2Product;
use App\Models\Level3Product;
use App\Models\Blogs;
class BlogController extends Controller
{
    public function all(){
        $level1products = Level1Product::all();
        $level2products = Level2Product::where('level1products_id',0);
        $level3products = Level3Product::where('level2products_id',0);
        $blogs = Blogs::all();
        return view('index', compact('blogs','level1products','level2products','level3products'));
    }
}
