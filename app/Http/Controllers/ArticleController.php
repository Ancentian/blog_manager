<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(6);  
        return view('articles.index', compact('articles'));
    }

    public function addBlog()
    {
        $tags = Tag::all();
        return view('articles.add', compact('tags'));
    }

    public function tags()
    {
        $tags = Tag::all();
        return view('articles.tags', compact('tags'));
    }

    public function articleSave(Request $request)
    {
        $request->validate([
            'title'    => 'required|string',
            'introduction'    => '',
            'excerpt'     => 'required|string',
            'body'        => 'required',
            'upload'        => 'required|image',
            'tag_id'      => 'required',
            'post_date' => 'required',
            'author'          => 'required|string', 
        ]);
        DB::beginTransaction();
        try {
           
            $upload_file = rand() . '.' . $request->upload->extension();
            $request->upload->move(storage_path('app/public/blog_photos/'), $upload_file);
            if(!empty($request->upload)) {
                $article = new Article;
                $article->title   = $request->title;
                $article->introduction = $request->introduction;
                $article->excerpt    = $request->excerpt;
                $article->body       = $request->body;
                $article->upload = $upload_file;
                $article->tag_id = $request->tag_id;
                $article->post_date = $request->post_date;
                $article->author         = $request->author;
                $article->save();
                Toastr::success('Article added Successfully','Success');
                DB::commit();
            }
            return redirect()->route('articles/list');
           
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Failed, Try Again!','Error');
            return redirect()->back();
        }
    }

    public function storeTag(Request $request)
    {
        $request->validate([
            'tag_name'    => 'required|string|unique:tags',
        ]);     
        DB::beginTransaction();
        try {
                $tag = new Tag;
                $tag->tag_name   = $request->tag_name;

                $tag->save();

                Toastr::success('Tag added Successfully','Success');
                DB::commit();

            return redirect()->route('articles.tags');
           
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Fail, Try Again!','Error');
            return redirect()->back();
        }
    }

    public function showArticle($id)
    {
        return view('articles.view');
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function deleteArticle(Request $request)
    {
        //dd($request);
        DB::beginTransaction();
        try {     
            if (!empty($request->id)) {
                Article::destroy($request->id);
                unlink(storage_path('app/public/blog_photos/'.$request->upload));
                DB::commit();
                Toastr::success('Article deleted successfully','Success');
                return redirect()->back();
            }
    
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Failed! Try Again. :)','Error');
            return redirect()->back();
        }
    }
}
