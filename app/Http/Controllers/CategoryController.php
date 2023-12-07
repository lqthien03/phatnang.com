<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function all(): View
    {   
        $category = Categories::all();
        return view('category.index',compact('users'));
    }
}
