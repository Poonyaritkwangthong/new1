<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::orderBy('id')->paginate(10);
        return view('news.index', ['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_news' => 'required',
            'n_img' => 'required',
            'n_location' => 'required',
            'n_detail' => 'required',
            'n_date' => 'required',
        ]);
        News::create($request->post());

        return redirect()->route('news.index')->with('success','news Type has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('news.show',compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'name_news' => 'required',
            'n_img' => 'required',
            'n_location' => 'required',
            'n_detail' => 'required',
            'n_date' => 'required',
        ]);
        $news->fill($request->post())->save();

        return redirect()->route('news.index')->with('success','news has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('news.index')->with('success','news has been deleted');
    }
}
