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
        return view('admin.static_page.contact', compact('contact'));
    }
}
