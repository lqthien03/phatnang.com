<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSettingRequest;
use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function edit($id)
    {
        $setting = Setting::findOrFail($id);
        $settingTime = $setting->time;
        $formattedTime = Carbon::parse($settingTime)->format('H:i');
        return view('admin.setting', compact('setting', 'formattedTime'));
    }
    public function update(Request $request, $id)
    {
        $setting = Setting::findOrFail($id);
        $seo = $setting->seo;
        $setting->tittle = $request->input('tittle');
        $setting->address = $request->input('address');
        $setting->name = $request->input('name');
        $setting->email = $request->input('email');
        $setting->holine = $request->input('holine');
        $setting->zalo = $request->input('zalo');
        $setting->phone = $request->input('phone');
        $setting->website = $request->input('website');
        $setting->fanpage = $request->input('fanpage');
        $setting->map = $request->input('map');
        $setting->link = $request->input('link');
        $setting->time = $request->input('time');
        $setting->product_number = $request->input('product_number');
        $setting->related_product_number = $request->input('related_product_number');
        $setting->posts = $request->input('posts');
        $setting->related_posts = $request->input('related_posts');
        $setting->map_iframe = $request->input('map_iframe');
        $setting->gg_analytic = $request->input('gg_analytic');
        $setting->gg_webmaster_tool = $request->input('gg_webmaster_tool');

        $setting->save();

        $seo->tittle = $request->input('tittle');
        $seo->keyword = $request->input('keyword');
        $seo->description = $request->input('description');

        $seo->save();

        return back();
    }
}
