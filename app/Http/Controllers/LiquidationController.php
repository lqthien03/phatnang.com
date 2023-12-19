<?php

namespace App\Http\Controllers;

use App\Models\Liquidation;
use Illuminate\Http\Request;

class LiquidationController extends Controller
{
    public function edit($id)
    {
        $liquidation = Liquidation::findOrFail($id);
        $seo = $liquidation->seo;
        return view('admin.static_page.liquidation', compact('liquidation', 'seo'));
    }

    public function update(Request $request, $id)
    {
        $liquidation = Liquidation::findOrFail($id);
        $seo = $liquidation->seo;
        // $validated = $request->validated();
        // dd($validated);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->storeAs('uploads', $imageName, 'public');
            $liquidation->image = $imageName;
        }
        $liquidation->tittle = $request->input('tittle');
        $liquidation->content = $request->input('content');
        $liquidation->seo_id = $request->input('seo_id');

        $seo->tittle = $request->input('tittle');
        $seo->keyword = $request->input('keyword');
        $seo->description = $request->input('description');

        $seo->save();
        $liquidation->save();

        return back();
    }
}
