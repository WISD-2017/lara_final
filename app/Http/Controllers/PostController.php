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
    
    if($posts == null){
        return ('nullpost');
    }
    else{
    return view('newest',['posts'=> $posts]);
    
    }   
}
   public function posts($id)
   {
       
        $post=Post::find($id);
        if($post==null)
        {
        return view('nullpost');
        }
        elseif(Auth::id()==$post->user_id)
        {
            $data=['post'=>$post];
            return view('ownerposts', $data);
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

   //編輯文章
   public function postsedit($id) 
    {
        $classfis = Classfi::all();
        $post = DB::table('posts')->where('id','=',$id)->get();
        return view('postedit', ['post'=>$post,'classfis'=>$classfis]);
   }

   public function postsupdate(PostRequest $request,$id) 
   {
        $post = Post::find($id);
        $post->update($request->all());

        return redirect()->route('posts.view',$post->id); 
    }


   public function hot()
   {
        
       // $comment = Comment::find()->where('post_id','=','1');
        $post = Comment::get()->sum('post_id')->orederBy();
    
        return view('hotposts',['post'=>$post]);
   }
}
