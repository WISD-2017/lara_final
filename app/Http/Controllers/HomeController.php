<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MemberRequest;
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

    public function member()
    { 
        $id =  Auth::user()->id;
        $member = DB::table('users')->where('id','=',$id)->get();        
        return view ('memberdata',['member'=>$member]);
    }
    
    public function memberedit()
    { 
        $id =  Auth::user()->id;
        $member = DB::table('users')->where('id','=',$id)->get();        
        return view ('memberedit',['member'=>$member]);
    }
    
    public function memberupdate(MemberRequest $request,$id)
    {
        $member = User::find($id);
        $member->update($request->all());
        return redirect()->route('home');  
    }
}
