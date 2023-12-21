<?php

namespace App\Http\Controllers;

use App\Models\Contact_Letter;
use Illuminate\Http\Request;

class ContactLetterController extends Controller
{
    public function show()
    {
        $contact_letter = Contact_Letter::all();
        return view('admin.contact_letter.contact_letter', compact('contact_letter'));
    }

    public function edit($id)
    {
        $contact_letter = Contact_Letter::all()->find($id);
        return view('admin.contact_letter.contact_letter_edit', compact('contact_letter'));
    }
    public function update(Request $request, $id)
    {
        $contact_letter = Contact_Letter::findOrFail($id);
        $contact_letter->name = $request->input('name');
        $contact_letter->phone = $request->input('phone');
        $contact_letter->email = $request->input('email');
        $contact_letter->address = $request->input('address');
        $contact_letter->topic = $request->input('topic');
        $contact_letter->content = $request->input('content');
        $contact_letter->note = $request->input('note');
        $contact_letter->confirm = $request->input('confirm');

        $contact_letter->save();
        return back();
    }

    public function destroy($id)
    {
        $contact_letter = Contact_Letter::find($id);
        $contact_letter->delete();
        return back();
    }
}
