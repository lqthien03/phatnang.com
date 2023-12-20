<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Seo;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show()
    {
        $news = News::all();
        return view('admin.news.news', compact('news'));
    }
    public function create()
    {
        return view('admin.news.news_create');
    }
    public function store(Request $request)
    {
        if ($request->has('image')) {
            $file = $request->image;
            $file_name = $file->getClientOriginalName();
            $file->move(public_path('uploads'), $file_name);
        }
        $request->merge(['image' => $file_name]);

        $news = News::create([
            'image' => $file_name,
            'tittle' => $request->input('tittle'),
            'display' => $request->input('display'),
            'describe' => $request->input('describe'),
            'content' => $request->input('content'),
            'outstand' => $request->input('outstand'),
        ]);
        $seo = Seo::create($request->only([
            'tittle',
            'keyword',
            'description',
        ]));
        $news->seo()->associate($seo);
        $news->save();
        return redirect()->route('show.news')->with('success', 'Bản ghi đã được tạo thành công!');
    }
    public function edit($id)
    {
        $news = News::findOrFail($id);
        $seo = $news->seo;
        return view('admin.news.news_edit', compact('news', 'seo'));
    }
    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);
        $seo = $news->seo;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->storeAs('uploads', $imageName, 'public');
            $news->image = $imageName;
        }
        $news->tittle = $request->input('tittle');
        $news->content = $request->input('content');
        $news->seo_id = $request->input('seo_id');
        $news->describe = $request->input('describe');
        $seo->tittle = $request->input('tittle');
        $seo->keyword = $request->input('keyword');
        $seo->description = $request->input('description');
        $seo->save();
        $news->save();

        return back();
    }
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        return back();
    }
}
