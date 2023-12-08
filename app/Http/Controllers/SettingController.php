<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function edit(Setting $setting)
    {

        return view('admin.setting', compact('setting'));
    }
    public function update(Setting $setting, UpdateSettingRequest $request)
    {
        dd($request);
        $validated = $request->validated();
        $setting->update($request->all());
        return view('admin.dashboard');
    }
}
