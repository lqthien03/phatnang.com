<?php

namespace App\Http\Controllers;

use App\Models\Level2_Product;
use Illuminate\Http\Request;

class Category2Controller extends Controller
{
    public function show()
    {
        $category_level2 = Level2_Product::all();

        // dd($category_level1);
        return view('admin.category.category_level2', compact('category_level2'));
    }
}
