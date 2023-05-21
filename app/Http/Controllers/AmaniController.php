<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Article;
use App\Models\Tag;
use App\Models\Comment;
use App\Models\Subscriber;
use Carbon\Carbon;
use App\Mail\Subscribe;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str; 
use Illuminate\Support\Facades\Mail;
use Brian2694\Toastr\Facades\Toastr;

class AmaniController extends Controller
{
    public function index()
    {
        $articles = Article::leftJoin('tags', 'tags.id', '=', 'articles.tag_id')
            ->select('articles.*', 'tags.id', 'tags.tag_name')
            ->orderBy('articles.created_at', 'desc')
            ->limit(3)
            ->get();
        $tags = Tag::latest()->orderBy('created_at', 'desc')->limit(3)->get();
        $blogs = Article::latest()->orderBy('created_at', 'desc')->limit(3)->get();
        return view('set.index', compact('articles', 'tags', 'blogs'));
    }

    public function blogs()
    {
        $articles = Article::latest()->paginate(6);
        $tags = Tag::latest()->orderBy('created_at', 'desc')->limit(10)->get();
        $blogs = Article::latest()->orderBy('created_at', 'desc')->limit(3)->get();
        return view('set.blogs', compact('articles', 'tags', 'blogs'));
    }

    public function blogDetails()
    {
        return view('blogs.blog-details');
    }

    public function singleBlog($id)
    {
        $article = DB::table('articles')
            ->where('articles.id', '=', $id)
            ->leftJoin('tags', 'tags.id', '=', 'articles.tag_id')
            ->select('articles.*', 'tags.tag_name')
            ->get()->first();
        $comments = DB::table('comments')
            ->where('comments.article_id', '=', $id)
            ->leftJoin('articles', 'articles.id', '=', 'comments.article_id')
            ->select('comments.*')
            ->get();
        $tags = Tag::latest()->orderBy('created_at', 'desc')->limit(10)->get();
        $articles = Article::latest()->orderBy('created_at', 'desc')->limit(3)->get();
        return view('set.singleBlog', compact('article', 'articles', 'tags', 'comments'));
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
        if ($articles->count() == 0) {
            Toastr::error("No Content Available", 'Error');
            return redirect()->back();
        } else{
            return view('set.blogsByCategory', compact('articles', 'tags', 'blogs'));
        }        
    }

    public function storeComment(Request $request)
    {
        $request->validate([
            'article_id'    => 'required|string',
            'name'    => '',
            'email'     => 'required|string',
            'comment'        => 'required',
        ]);
        DB::beginTransaction();
        try {
                $comment = new Comment;
                $comment->article_id   = $request->article_id;
                $comment->name = $request->name;
                $comment->email    = $request->email;
                $comment->comment       = $request->comment;
                $comment->save();

                Toastr::success('Comment Submitted Successfully','Success');
                DB::commit();
            return redirect('singleBlog/'.$comment->article_id);
           
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Failed, Try Again!','Error');
            return redirect()->back();
        }
    }

    public function storeSubscriber(Request $request)
{
    $request->validate([
        'email' => 'required|string|unique:subscribers,email',
    ], 
    [
        'email.unique' => 'This email is already Taken.',
    ]);

    DB::beginTransaction();

    try {
        $subscriber = new Subscriber;
        $subscriber->email = $request->email;

        //Send Mail
        $email = $subscriber->email;
        $subscriber->save();
        Mail::to($email)->send(new Subscribe($email));
        //End Send Mail
        
        DB::commit();
        Toastr::success("You've Subscribed Successfully", 'Success');
        return redirect()->back();

    } catch(\Exception $e) {
        DB::rollback();
        Toastr::error('Failed, Try Again!', 'Error');
        return redirect()->back();
    }
}


    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
