<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateFaviconRequest;
use App\Models\Favicon;
use Illuminate\Http\Request;

class FaviconController extends Controller
{
    public function edit(Favicon $favicon)
    {
        // dd($favicon);
        return view('admin.image_video.favicon', compact('favicon'));
    }
    public function update(Favicon $favicon, UpdateFaviconRequest $request)
    {
        $validated = $request->validated();
        // dd($validated);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->storeAs('uploads', $imageName, 'public');
            $favicon->image = $imageName;
        }
        $favicon->display = $request->has('display') ? true : false;
        $favicon->save();
        return back();
    }
}
