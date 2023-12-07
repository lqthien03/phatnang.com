<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function all(){
        $blogs = Blogs::all();
        return view('index', compact('blogs'));
    }
}
