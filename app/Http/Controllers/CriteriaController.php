<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCriteriaRequest;
use App\Models\Criteria;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class CriteriaController extends Controller
{
    public function show()
    {
        $criteria = Criteria::all();
        return view('admin.image_video.criteria', compact('criteria'));
    }
    public function create()
    {
        return view('admin.image_video.criteria_create');
    }
    public function store(Request $request)
    {
        if ($request->has('image')) {
            $file = $request->image;
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('uploads'), $file_name);
        }
        $request->merge(['image' => $file_name]);
        // dd($request);
        $criteria = Criteria::create([
            'image' => $file_name,
            'tittle' => $request->input('tittle'),
            'describe' => $request->input('describe'),
            'display' => $request->input('display'),
        ]);
        return redirect()->route('show.criteria')->with('success', 'Bản ghi đã được tạo thành công!');
    }
    public function edit(Criteria $criteria)
    {
        return view('admin.image_video.criteria_edit', compact('criteria'));
    }

    public function update(Criteria $criteria, UpdateCriteriaRequest $request)
    {
        $validated = $request->validated();
        // dd($validated);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->storeAs('uploads', $imageName, 'public');
            $criteria->image = $imageName;
        }
        $criteria->display = $request->has('display') ? true : false;
        $criteria->tittle = $request->input('tittle');
        $criteria->describe = $request->input('describe');

        $criteria->save();
        return back();
    }
    public function destroy($id)
    {
        $criteria = Criteria::find($id);
        $criteria->delete();
        return back();
    }
}
