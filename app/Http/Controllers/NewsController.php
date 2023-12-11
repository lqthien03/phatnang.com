<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show()
    {
        $news = News::all();
        return view('admin.news.news'  , compact('news'));
    }
    public function create()
    {
        $news = News::all();
        return view('admin.news.news_create');
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
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        return back();
    }
}
