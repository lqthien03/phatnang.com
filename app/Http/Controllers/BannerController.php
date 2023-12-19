<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateBannerRequest;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function edit(Banner $banner)
    {
        return view('admin.image_video.banner', compact('banner'));
    }

    public function update(Banner $banner, UpdateBannerRequest $request)
    {
        $validated = $request->validated();
        // dd($validated);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->storeAs('uploads', $imageName, 'public');
            $banner->image = $imageName;
        }
        $banner->display = $request->has('display') ? true : false;
        $banner->tittle = $request->input('tittle');
        $banner->link = $request->input('link');

        $banner->save();
        return back();
    }
}
