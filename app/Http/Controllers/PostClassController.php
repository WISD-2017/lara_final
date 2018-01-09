<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Classfi;
use DB;
class PostClassController extends Controller
{
    //顯示文章類別
    public function show()
    {   
        $classfis = DB::table('classfis')->get();
        return view('classview',['classfis'=>$classfis]);
    }

    public function showpost($id)
    {   
        $posts = Post::where('classfi_id',$id)->orderBy('created_at','DESC')->get();
        $class= Classfi::find($id);
        
        if($posts != null){    
        return view('classposts',['posts'=>$posts,'class'=>$class]);
        }
        else
        {
            return view('nullpost');
        }
    }
}
