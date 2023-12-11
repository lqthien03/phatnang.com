<?php

namespace App\Http\Controllers;

use App\Models\Level1_Quotation;
use Illuminate\Http\Request;

class Quotation1Controller extends Controller
{
    public function show()
    {
        $level1_Quotation = Level1_Quotation::all();
        // dd($level1_Quotation);
        return view('admin.quotation.category_level1', compact('level1_Quotation'));
    }
    public function create()
    {

        
    }

    public function store()
    {
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
