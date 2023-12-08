<?php

namespace App\Http\Controllers;

use App\Models\Category1;
use App\Models\Level1_Product;
use Illuminate\Http\Request;

class Category1Controller extends Controller
{
    public function show()
    {
        $category_level1 = Level1_Product::all();

        // dd($category_level1);
        return view('admin.category.category_level1', compact('category_level1'));
    }
}
