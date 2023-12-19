<?php

namespace App\Http\Controllers;

use App\Models\Slideshow;
use Illuminate\Http\Request;

class SlideshowController extends Controller
{
    public function show()
    {
        $slideshow = Slideshow::all();
        return view('admin.image_video.slideshow', compact('slideshow'));
    }

    public function create()
    {
        return view('admin.image_video.slideshow_create');
    }
    public function store(Request $request)
    {
        if ($request->has('image')) {
            $file = $request->image;
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('uploads'), $file_name);
        }
        $request->merge(['image' => $file_name]);
        // dd($request);
        $slideshow = Slideshow::create([
            'image' => $file_name,
            'tittle' => $request->input('tittle'),
            'link' => $request->input('link'),
            'display' => $request->input('display'),
        ]);
        return redirect()->route('show.slideshow')->with('success', 'Bản ghi đã được tạo thành công!');
    }
    public function edit(Slideshow $slideshow)
    {
        return view('admin.image_video.slidershow_edit', compact('slideshow'));
    }
}
