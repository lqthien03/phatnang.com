<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSeoNewstRequest;
use App\Models\SeoNews;
use Illuminate\Http\Request;

class SeoNewsController extends Controller
{
    public function edit(SeoNews $news)
    {
        return view('admin.seo_page.news', compact('news'));
    }
    public function update(SeoNews $news, UpdateSeoNewstRequest $request)
    {
        $validated = $request->validated();
        // dd($validated);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->storeAs('uploads', $imageName, 'public');
            $news->image = $imageName;
        }
        $news->tittle = $request->input('tittle');
        $news->keyword = $request->input('keyword');
        $news->description = $request->input('description');
        $news->save();
        return back();
    }
}
