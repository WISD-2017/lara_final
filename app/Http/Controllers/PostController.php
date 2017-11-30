<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
   public function newest()
   {
    $posts = Post::orderBy('created_at','DESC')->get();
    $data =['posts'=> $posts];
    return view('vi',$data);
   }
   public function posts($id)
   {
        $post=Post::find($id);
        $data=['post'=>$post];
        return view('posts', $data);
   }
   
    
}
