<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\NewsRepoter;

class NewsRepoterController extends Controller
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
        $repoters = NewsRepoter::all();
        return view('newsrepo.index', ['repoters' => $repoters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newsrepo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news_repo = new NewsRepoter();
        $news_repo->name = $request->name;
        $news_repo->save();
        
        $url = route('newsrepo.index');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $repoter = NewsRepoter::find($id);
        
        return view('newsrepo.edit',['repoter' => $repoter]);
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
        $repoter = NewsRepoter::find($id);
        $repoter->name = $request->name;
        $repoter->save();
        
        $url = route('newsrepo.index');
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
        NewsRepoter::destroy($id);
        
        $url = route('newsrepo.index');
        return redirect($url);
    }
}
