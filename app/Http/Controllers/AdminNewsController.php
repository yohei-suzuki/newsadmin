<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;
use App\NewsCategory;
use App\NewsRepoter;

class AdminNewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$news = News::all();  
        $news = News::paginate(5);
        return view('news.index', ['news' => $news]);
        //return('news admin index');
        //return view('news.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = NewsCategory::all();
        $repoters = NewsRepoter::all();
        return view(
            'news.create',
            [
                'categorys' => $categorys,
                'repoters' => $repoters,
                ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'   => 'required|max:191',
            'content' => 'required',
            'cate'   => 'required|max:191',
            'repo'   => 'required|max:191',
        ]);
        
        $news = new News();
        
        $news->title = $request->title;
        $news->content = $request->content;
        $news->category_id = $request->cate;
        $news->repoter_id = $request->repo;
        $news->save();
        
        //return("post! title:$request->title" );
        $url = route('news.index');
        return redirect($url);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::find($id);
        
        $news_cate = NewsCategory::where('id', '=', $news->category_id)->first();
        $news_repo = NewsRepoter::where('id', '=', $news->repoter_id)->first();
        //dd($news_cate);
        
        return view(
            'news.show', 
            [
            'news' => $news, 
            'category' => $news_cate->name,
            'repoter' => $news_repo->name,
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        $categorys = NewsCategory::all();
        $repoters = NewsRepoter::all();
        
        //return("admin news edit $id");
        return view(
            'news.edit', 
            [
                'news' => $news,
                'categorys' => $categorys,
                'repoters' => $repoters,
                ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'   => 'required|max:191',
            'content' => 'required',
            'cate'   => 'required|max:191',
            'repo'   => 'required|max:191',
        ]);
        
        $news = News::find($id);
        $news->title = $request->title;
        $news->content = $request->content;
        $news->category_id = $request->cate;
        $news->repoter_id = $request->repo;
        $news->save();
        
        $url = route('news.index');
        return redirect($url);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::destroy($id);
        
        $url = route('news.index');
        return redirect($url);
    }
}
