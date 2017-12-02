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
class PostController extends Controller
{
   public function newest()
   {
    $posts = Post::orderBy('created_at','DESC')->get();
    $data =['posts'=> $posts];
    return view('newest',$data);
   }
   public function posts($id)
   {
        $post=Post::find($id); 
        $data=['post'=>$post];
        return view('posts', $data);
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
