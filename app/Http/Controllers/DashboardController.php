<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {
        $setting = Setting::all()->first();
        // dd($setting);
        return view('admin.dashboard', compact('setting'));
    }
}
