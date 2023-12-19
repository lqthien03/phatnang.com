<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSloganRequest;
use App\Models\Slogan;
use Illuminate\Http\Request;

class SloganController extends Controller
{
    public function edit()
    {
        $slogan = Slogan::all()->first();
        return view('admin.static_page.slogan', compact('slogan'));
    }
    public function update(Slogan $slogan, UpdateSloganRequest $request)
    {
        $validated = $request->validated();
        $slogan->update($request->all());
        return back();
    }
}
