<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateImageHomeRequest;
use App\Models\Image_Home;
use Illuminate\Http\Request;

class ImageHomeController extends Controller
{
    public function edit(Image_Home $image_home)
    {
        return view("admin.image_video.image_home", compact('image_home'));
    }
    public function update(Image_Home $image_home, UpdateImageHomeRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->storeAs('uploads', $imageName, 'public');
            $image_home->image = $imageName;
        }
        $image_home->display = $request->has('display') ? true : false;
        $image_home->save();
        return back();
    }
}
