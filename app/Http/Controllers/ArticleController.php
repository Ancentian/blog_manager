<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('articles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addBlog()
    {
        return view('articles.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function articleSave(Request $request)
    {
        $request->validate([
            'title'    => 'required|string',
            'excerpt'     => 'required|string',
            'body'        => 'required',
            'post_date' => 'required',
            'author'          => 'required|string',
            'upload'        => 'required|image',
        ]);

        dd($request);
        
        DB::beginTransaction();
        try {
           
            $upload_file = rand() . '.' . $request->upload->extension();
            $request->upload->move(storage_path('app/public/blog-photos/'), $upload_file);
            if(!empty($request->upload)) {
                $article = new Article;
                $article->title   = $request->title;
                $article->excerpt    = $request->excerpt;
                $article->body       = $request->body;
                $article->upload = $upload_file;
                $article->post_date = $request->post_date;
                $article->author         = $request->author;
                
                $article->save();

                Toastr::success('Article added successfully :)','Success');
                DB::commit();
            }

            return redirect()->back();
           
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('fail, Add new Article  :)','Error');
            return redirect()->back();
        }
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
