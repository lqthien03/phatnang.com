<?php

namespace App\Http\Controllers;

use App\Models\Policy;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function show()
    {
        $policy = Policy::all();

        // dd($policy);
        return view('admin.policy.policy', compact('policy'));
    }
    public function create()
    {
        $policy = Policy::all();
        return view('admin.policy.policy_create', compact('policy'));
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
    public function destroy()
    {
    }
}
