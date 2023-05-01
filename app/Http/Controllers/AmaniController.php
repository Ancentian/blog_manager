<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Article;
use App\Models\Tag;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Str; 

class AmaniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::latest()->orderBy('created_at', 'desc')->limit(3)->get();
        $tags = Tag::latest()->orderBy('created_at', 'desc')->limit(3)->get();
        $blogs = Article::latest()->orderBy('created_at', 'desc')->limit(3)->get();
        return view('set.index', compact('articles', 'tags', 'blogs'));
    }

    public function blogs()
    {
        $articles = Article::latest()->get();
        $tags = Tag::latest()->orderBy('created_at', 'desc')->limit(10)->get();
        $blogs = Article::latest()->orderBy('created_at', 'desc')->limit(3)->get();
        return view('set.blogs', compact('articles', 'tags', 'blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blogDetails()
    {
        return view('blogs.blog-details');
    }

    public function singleBlog($id)
    {
        //$article = Article::where('id',$id)->first();
        $article = DB::table('articles')
            ->where('articles.id', '=', $id)
            ->leftJoin('tags', 'tags.id', '=', 'articles.tag_id')
            ->select('articles.*', 'tags.tag_name')
            ->get()->first();
        $tags = Tag::latest()->orderBy('created_at', 'desc')->limit(10)->get();
        $articles = Article::latest()->orderBy('created_at', 'desc')->limit(3)->get();
        return view('set.singleBlog', compact('article', 'articles', 'tags'));
    }

    public function contact()
    {
        return view('set.contact');
    }

    public function blogsByCategory($id)
    {
        $tags = Tag::latest()->orderBy('created_at', 'desc')->limit(10)->get();
        $blogs = Article::latest()->orderBy('created_at', 'desc')->limit(3)->get();
        $articles = DB::table('articles')
            ->where('articles.tag_id', '=', $id)
            ->leftJoin('tags', 'tags.id', '=', 'articles.tag_id')
            ->select('articles.*', 'tags.id', 'tags.tag_name')
            ->get();
            //dd($articles);
            return view('set.blogsByCategory', compact('articles', 'tags', 'blogs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
