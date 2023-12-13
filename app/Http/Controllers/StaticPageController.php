<?php

namespace App\Http\Controllers;
use App\Models\Introduce;
use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function showintroduce(){
        $introduce = Introduce::all();
        return view('admin.static_page.introduce', compact('introduce'));
    }
}
