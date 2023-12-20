<?php

namespace App\Http\Controllers;

use App\Models\Policy;
use App\Models\Seo;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function show()
    {
        $policy = Policy::all();
        return view('admin.policy.policy', compact('policy'));
    }
    public function create()
    {

        return view('admin.policy.policy_create');
    }
    public function store(Request $request)
    {
        if ($request->has('image')) {
            $file = $request->image;
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('uploads'), $file_name);
        }
        $request->merge(['image' => $file_name]);

        $policy = Policy::create([
            'image' => $file_name,
            'tittle' => $request->input('tittle'),
            'display' => $request->input('display'),
            'content' => $request->input('content'),
        ]);
        $seo = Seo::create($request->only([
            'tittle',
            'keyword',
            'description',
        ]));
        $policy->seo()->associate($seo);
        $policy->save();
        return redirect()->route('show.policy')->with('success', 'Bản ghi đã được tạo thành công!');
    }
    public function edit($id)
    {
        $policy = Policy::findOrFail($id);
        $seo = $policy->seo;
        return view('admin.policy.policy_edit', compact('policy', 'seo'));
    }
    public function update(Request $request, $id)
    {
        $policy = Policy::findOrFail($id);
        $seo = $policy->seo;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->storeAs('uploads', $imageName, 'public');
            $policy->image = $imageName;
        }
        $policy->tittle = $request->input('tittle');
        $policy->content = $request->input('content');
        $policy->seo_id = $request->input('seo_id');
        $seo->tittle = $request->input('tittle');
        $seo->keyword = $request->input('keyword');
        $seo->description = $request->input('description');
        $policy->save();
        $policy->save();

        return back();
    }
    public function destroy($id)
    {
        $policy = Policy::find($id);
        $policy->delete();
        return back();
    }
}
