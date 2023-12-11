<?php

namespace App\Http\Controllers;

use App\Models\SupportCustomer;
use Illuminate\Http\Request;

class SupportCustomerController extends Controller
{
    public function show()
    {
        $support = SupportCustomer::all();
        return view('admin.customer_support',compact('support'));
    }
    public function create()
    {
    }
    public function store()
    {
    }
    public function edit()
    {
    }
    public function update()
    {
    }
    public function delete()
    {
    }
}
