<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Post;
use App\User;
class HomeController extends Controller
{
    
    public function index( )
    {

        return view('welcome');
    }
    
    public function home()
    { 
        $id =  Auth::user()->id;
        $posts = DB::table('posts')->where('user_id','=' ,$id)->get();        
        return view ('home',['posts'=>$posts]);
    }
}
