<?php

namespace App\Http\Controllers;

use App\Models\Network_Society;
use Illuminate\Http\Request;

class NetworkSocietyController extends Controller
{
    public function show()
    {
        $network_society = Network_Society::all();
        return view('admin.image_video.social_network', compact('network_society'));
    }

    public function create()
    {
        $network_society = Network_Society::all();
        return view('admin.image_video.social_network_create', compact('network_society'));
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
        $network_society = Network_Society::create([
            'image' => $file_name,
            'link' => $request->input('link'),
            'display' => $request->input('display'),
        ]);
        return redirect()->route('show.network-society')->with('success', 'Bản ghi đã được tạo thành công!');
    }
    public function edit()
    {
    }
    public function update()
    {
    }

    public function destroy($id)
    {
        $network_society = Network_Society::find($id);
        $network_society->delete();
        return   back();
    }
}
