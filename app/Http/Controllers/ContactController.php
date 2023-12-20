<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        $seo = $contact->seo;
        return view('admin.static_page.contact', compact('contact', 'seo'));
    }
    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $seo = $contact->seo;
        // $validated = $request->validated();
        // dd($validated);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->storeAs('uploads', $imageName, 'public');
            $contact->image = $imageName;
        }
        $contact->tittle = $request->input('tittle');
        $contact->content = $request->input('content');
        $contact->seo_id = $request->input('seo_id');

        $seo->tittle = $request->input('tittle');
        $seo->keyword = $request->input('keyword');
        $seo->description = $request->input('description');

        $seo->save();
        $contact->save();

        return back();
    }
}
