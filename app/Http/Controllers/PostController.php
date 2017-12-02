<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\Post;
use Auth;
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
        return view('postcreate');
   }
   public function store(PostRequest $request) 
    {
    Post::create($request->all());
    return redirect()->route('newest');
   }
    
}
