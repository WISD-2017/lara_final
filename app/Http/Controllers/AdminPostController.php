<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\CheckAdmin;
use Auth;
use DB;
use App\Classfi;
use App\Comment;
use App\Post;
class AdminPostController extends Controller
{
    public function __construct()
    {
        $this->middleware(CheckAdmin::class);
        
    }
    public function index()
    {
        $admin = Auth::user()->admin;
        return view('admin.index');
    }


    public function posts()
    {
        $post = Post::orderBy('created_at','DESC')->get();
        return view('admin.posts',['post'=> $post]);
    }

    public function postcheck($id)
    {
        $post=Post::find($id);
        return view('admin.postdelet',['post'=>$post]);
    }

    public function postdelete($id)
    {   
    
        $comment=DB::table('comments')->where('post_id','=',$id)->get();
        
        if($comment!=null){
            foreach($comment as $comment)
            DB::table('comments')->where('post_id', '=', $comment->post_id)->delete();
            
        }
        Post::destroy($id);
        return redirect('admin/posts');
    }
}

