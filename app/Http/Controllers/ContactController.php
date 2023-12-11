<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        $contact = Contact::all();
        return view('admin.static_page.contact', compact('contact'));
    }
}
