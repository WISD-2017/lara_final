<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Requests\CommentRequest;
use App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\Post;
use App\Comment;
use Auth;
use App\Classfi;
use DB;
class PostController extends Controller
{
   public function newest()
   {
    $posts = Post::orderBy('created_at','DESC')->get();
    foreach($posts as $post)
    {
        $user = DB::table('users')->where('id','=',$post ->user_id)->get();
    }
    $data =['posts'=> $posts];

    return view('newest',$data,['user'=>$user]);
   }
   public function posts($id)
   {
       
        $post=Post::find($id);
        if($post==null)
        {
        return view('nullpost');
        }
        else{
        $data=['post'=>$post];
        return view('posts', $data);
        }
    }
   public function create()
   {
       $classfis = Classfi::all(); 
        return view('postcreate',['classfis'=>$classfis]);
   }
   public function store(PostRequest $request) 
    {
    Post::create($request->all());
    return redirect()->route('newest');
   }

   //留言
   public function comment($id) 
   {
        $post=Post::find($id);
        return view('postcomment',['post'=>$post]);
    }

    public function comstore(CommentRequest $request) 
    {
    Comment::create($request->all());
    $id = $request->post_id;
    
    return redirect()->route('posts.view',$id);
   }

   
}
