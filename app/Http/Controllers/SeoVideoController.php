<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSeoVideotRequest;
use App\Models\SeoVideo;
use Illuminate\Http\Request;

class SeoVideoController extends Controller
{
    public function edit(SeoVideo $video)
    {
        return view('admin.seo_page.video', compact('video'));
    }
    public function update(SeoVideo $video, UpdateSeoVideotRequest $request)
    {
        $validated = $request->validated();
        // dd($validated);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->storeAs('uploads', $imageName, 'public');
            $video->image = $imageName;
        }
        $video->tittle = $request->input('tittle');
        $video->keyword = $request->input('keyword');
        $video->description = $request->input('description');
        $video->save();
        return back();
    }
}
