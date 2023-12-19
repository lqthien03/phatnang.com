<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateLogoRequest;
use App\Models\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    public function edit(Logo $logo)
    {
        return view('admin.image_video.logo', compact('logo'));
    }
    public function update(Logo $logo, UpdateLogoRequest $request)
    {
        $validated = $request->validated();
        // dd($validated);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName(); // Lấy tên file gốc

            // Lưu hình ảnh với tên gốc vào thư mục và cập nhật tên vào CSDL
            $image->storeAs('uploads', $imageName, 'public');
            $logo->image = $imageName;
        }
        // dd($logo);
        $logo->display = $request->has('display') ? true : false;
        
        $logo->save();
        return back();
    }
}
