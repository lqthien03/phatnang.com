<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSeoQuotationRequest;
use App\Models\SeoQuotation;
use Illuminate\Http\Request;

class SeoQuotationController extends Controller
{
    public function edit(SeoQuotation $quotation)
    {
        return view('admin.seo_page.quotation', compact('quotation'));
    }
    public function update(SeoQuotation $quotation, UpdateSeoQuotationRequest $request)
    {
        $validated = $request->validated();
        // dd($validated);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->storeAs('uploads', $imageName, 'public');
            $quotation->image = $imageName;
        }
        $quotation->tittle = $request->input('tittle');
        $quotation->keyword = $request->input('keyword');
        $quotation->description = $request->input('description');
        $quotation->save();
        return back();
    }
}
