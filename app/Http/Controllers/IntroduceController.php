<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateIntroduceRequest;
use App\Models\Introduce;
use Illuminate\Http\Request;

class IntroduceController extends Controller
{
    public function edit($id)
    {
        $introduce = Introduce::findOrFail($id);
        $seo = $introduce->seo;
        // dd($seo);
        return view('admin.static_page.introduce', compact('introduce', 'seo'));
    }
    public function update(Request $request, $id)
    {
        $introduce = Introduce::findOrFail($id);
        $seo = $introduce->seo;
        // $validated = $request->validated();
        // dd($validated);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->storeAs('uploads', $imageName, 'public');
            $introduce->image = $imageName;
        }
        $introduce->tittle = $request->input('tittle');
        $introduce->content = $request->input('content');
        $introduce->seo_id = $request->input('seo_id');

        $seo->tittle = $request->input('tittle');
        $seo->keyword = $request->input('keyword');
        $seo->description = $request->input('description');

        $seo->save();
        $introduce->save();

        return back();
    }
}
