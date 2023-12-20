<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function edit($id)
    {
        $footer = Footer::findOrFail($id);

        return view("admin.static_page.footer", compact('footer'));
    }

    public function update(Request $request, $id)
    {
        $footer = Footer::findOrFail($id);
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $imageName = $image->getClientOriginalName();
        //     $image->storeAs('uploads', $imageName, 'public');
        //     $footer->image = $imageName;
        // }
        $footer->tittle = $request->input('tittle');
        $footer->content = $request->input('content');

        $footer->save();

        return back();
    }
}
