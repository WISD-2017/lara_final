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
   
    
}
