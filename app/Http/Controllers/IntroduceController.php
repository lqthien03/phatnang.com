<?php

namespace App\Http\Controllers;
use App\Models\Introduce;
use Illuminate\Http\Request;

class IntroduceController extends Controller
{
    public function all(){
        $introduce = Introduce::all();
        return view('introduce',compact('introduce'));
    }
}
