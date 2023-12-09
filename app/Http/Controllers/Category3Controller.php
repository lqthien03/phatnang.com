<?php

namespace App\Http\Controllers;

use App\Models\Level3_Product;
use Illuminate\Http\Request;

class Category3Controller extends Controller
{
    public function show()
    {
        $category_level3 = Level3_Product::all();

        // dd($category_level1);
        return view('admin.category.category_level3', compact('category_level3'));
    }
}
