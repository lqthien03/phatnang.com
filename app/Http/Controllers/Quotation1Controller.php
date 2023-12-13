<?php

namespace App\Http\Controllers;

use App\Models\Level1_Quotation;
use App\Models\Seo;
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
        $level1_Quotation = Level1_Quotation::all();
        return view('admin.quotation.category_level1_create', compact('level1_Quotation'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'tittle' => 'required',
            'display' => 'integer',
        ]);

        $level1_Quotation = Level1_Quotation::create($request->only([
            'image',
            'tittle',
            'display',
            'seo_id',
        ]));
        // dd($level1_Quotation);
        $seo = Seo::create($request->only([
            'tittle',
            'keyword',
            'description',
        ]));

        $level1_Quotation->seo()->associate($seo);
        $level1_Quotation->save();
        return redirect()->route('show.quotation1')->with('success', 'Bản ghi đã được tạo thành công!');
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy($id)
    {
        $level1_Quotation = Level1_Quotation::find($id);
        $level1_Quotation->delete();
        return back();
    }
}
