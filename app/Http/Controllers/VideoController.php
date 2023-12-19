<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateVideoRequest;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function show()
    {
        $video = Video::all();
        // dd($video);
        return view('admin.image_video.video', compact('video'));
    }

    public function create()
    {
        $video = Video::all();
        return view('admin.image_video.video_create', compact('video'));
    }
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'tittle' => 'required',
            'link' => 'required',
            'display' => 'integer',
        ]);
        $video = Video::create($request->all());
        return redirect()->route('show.video')->with('success', 'Bản ghi đã được tạo thành công!');
    }
    public function edit(Video $video)
    {
        return view('admin.image_video.video_edit', compact('video'));
    }
    public function update(Video $video, UpdateVideoRequest $request)
    {
        $validated = $request->validated();
        $video->update($request->all());
        return back();
    }

    public function destroy($id)
    {
        $video = Video::find($id);
        $video->delete();
        return back();
    }
}
