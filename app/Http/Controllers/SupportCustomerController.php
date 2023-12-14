<?php

namespace App\Http\Controllers;

use App\Models\SupportCustomer;
use Illuminate\Http\Request;

class SupportCustomerController extends Controller
{
    public function show()
    {
        $support = SupportCustomer::all();
        return view('admin.customer_support', compact('support'));
    }
    public function create()
    {
        $support = SupportCustomer::all();
        return view('admin.customer_support_create', compact('support'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'tittle' => 'required',
            'display' => 'required',
            'phone' => 'required',
            'zalo' => 'required',
        ]);

        $support = SupportCustomer::create($request->all());
        // $support = save();
        return redirect()->route('show.support_customer')->with('success', 'Bản ghi đã được tạo thành công!');
    }
    public function edit()
    {
    }
    public function update()
    {
    }
    public function delete($id)
    {
        $support = SupportCustomer::find($id);
        $support->delete();
        return back();
    }
}
